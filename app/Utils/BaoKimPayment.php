<?php

/**
 *
 *		Phiên bản: 0.1
 *		Tên lớp: BaoKimPayment
 *		Chức năng: Tích hợp thanh toán qua baokim.vn cho các merchant site có đăng ký API
 *						- Xây dựng URL chuyển thông tin tới baokim.vn để xử lý việc thanh toán cho merchant site.
 *						- Xác thực tính chính xác của thông tin đơn hàng được gửi về từ baokim.vn.
 *
 */
namespace App\Utils;

class BaoKimPayment
{
	// URL checkout của baokim.vn
	private $baokim_url = 'https://baokim.vn/payment/order/version11';

	// Mã merchante site
//	private $merchant_id = '647';	// Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site
	private $merchant_id = '33416';	// Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site

	// Mật khẩu bảo mật
	private $secure_pass = '327bd9d2c19f751f'; // Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site
//	private $secure_pass = 'ae543c080ad91c23'; // Biến này được baokim.vn cung cấp khi bạn đăng ký merchant site

    private $email = "hmtmail1@gmail.com";

    /**
     * Cấu hình phương thức thanh toán với các tham số
     * E-mail Bảo Kim - E-mail tài khoản bạn đăng ký với BaoKim.vn.
     * Merchant ID - là “mã website” được Baokim cấp khi bạn đăng ký tích hợp.
     * Mã bảo mật - là “mật khẩu” được Baokim cấp khi bạn đăng ký tích hợp
     * Vd : 12f31c74fgd002b1
     * Server Bảo Kim
     * Trang ​Kiểm thử - server để test thử phương thức thanh. .toán
     * Trang thực tế - Server thực tế thực hiện thanh toán.
     * https://www.baokim.vn/payment/order/version11' => ('Trang thực tế'),
     * http://kiemthu.baokim.vn/payment/order/version11' => ('Trang kiểm thử')
     * Chọn Save configuration để áp dụng thay đổi
     * Hàm xây dựng url chuyển đến BaoKim.vn thực hiện thanh toán, trong đó có tham số mã hóa (còn gọi là public key)
     * @param string $orderCode         Mã đơn hàng
     * @param string $totalAmount       Giá trị đơn hàng
     * @param string $orderDescription  Mô tả đơn hàng
     * @param string $urlSuccess        Url trả về khi thanh toán thành công
     * @param string $urlCancel         Url trả về khi hủy thanh toán
     * @param string $payerName
     * @param string $payerEmail
     * @param string $payerPhoneNo
     * @param string $address
     *       $order_id                Mã đơn hàng
     *       $business            Email tài khoản người bán
     *       $total_amount            Giá trị đơn hàng
     *       $shipping_fee            Phí vận chuyển
     *       $tax_fee                Thuế
     *       $order_description    Mô tả đơn hàng
     *       $url_success            Url trả về khi thanh toán thành công
     *       $url_cancel            Url trả về khi hủy thanh toán
     *       $url_detail            Url chi tiết đơn hàng
     *       null $payer_name
     *       null $payer_email
     *       null $payer_phone_no
     *       null $shipping_address
     * @return string url cần tạo
     */
    public function createRequestUrl($orderCode, $totalAmount, $orderDescription, $urlSuccess, $urlCancel, $payerName, $payerEmail,$payerPhoneNo, $address)
    {
        $totalAmount = str_replace('.', '', $totalAmount);
        $currency = 'VND'; // USD
        // Mảng các tham số chuyển tới baokim.vn
        $params = array(
            'merchant_id'       => strval($this->merchant_id),
            'order_id'          => strval($orderCode),
            'business'          => strval($this->email),
            'total_amount'      => strval($totalAmount),
            'shipping_fee'      => strval('0'),
            'tax_fee'           => strval('0'),
            'order_description' => $orderDescription,
            'url_success'       => strtolower($urlSuccess),
            'url_cancel'        => strtolower($urlCancel),
            'url_detail'        => strtolower(''),
            'payer_name'        => strval($payerName),
            'payer_email'       => strval($payerEmail),
            'payer_phone_no'    => strval($payerPhoneNo),
            'shipping_address'  => strval($address),
            'currency'          => strval($currency),
        );
        ksort($params);
        $params['checksum'] = hash_hmac('SHA1', implode('', $params), $this->secure_pass);
        //Kiểm tra  biến $redirect_url xem có '?' không, nếu không có thì bổ sung vào
        $redirect_url = $this->baokim_url;
//        $redirect_url = $bkUrl . Config::get('payment::BaoKim.BAOKIM_API_PAYMENT');
        if (strpos($redirect_url, '?') === false) {
            $redirect_url .= '?';
        } else if (substr($redirect_url, strlen($redirect_url) - 1, 1) != '?' && strpos($redirect_url, '&') === false) {
            // Nếu biến $redirect_url có '?' nhưng không kết thúc bằng '?' và có chứa dấu '&' thì bổ sung vào cuối
            $redirect_url .= '&';
        }
        // Tạo đoạn url chứa tham số
        $url_params = '';
        foreach ($params as $key => $value) {
            if ($url_params == '')
                $url_params .= $key . '=' . urlencode($value);
            else
                $url_params .= '&' . $key . '=' . urlencode($value);
        }
        return $redirect_url . $url_params;
    }
    /**
     * Hàm thực hiện xác minh tính chính xác thông tin trả về từ BaoKim.vn
     * @param array $url_params chứa tham số trả về trên url
     * @return true nếu thông tin là chính xác, false nếu thông tin không chính xác
     */
    public function verifyResponseUrl($url_params = array())
    {
        if (empty($url_params['checksum'])) {
            return false;
        }
        $checksum = $url_params['checksum'];
        unset($url_params['checksum']);
        ksort($url_params);
        if (strcasecmp($checksum, hash_hmac('SHA1', implode('', $url_params), $this->secure_pass)) === 0)
            return true;
        else
            return false;
    }

	private function createCheckSum($params){
        ksort($params);
        $str_to_hash = implode('',$params);
        return hash_hmac("sha1", $str_to_hash, $this->secure_pass, $raw_output=TRUE);
    }
}
?>