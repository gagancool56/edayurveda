<?php
if (!function_exists('asset_url')) {
    function asset_url($prefix = '')
    {
        if (empty($prefix)) {
            $url = base_url('assets/');
        } else {
            $url = base_url('assets/' . $prefix);
        }
        return $url;
    }
}

if (!function_exists('load_file')) {
    function load_file($maincontent = '', $data = '')
    {
        $CI = &get_instance();
        $CI->load->view('inc/topbar');
        $CI->load->view('inc/header');
        $CI->load->view($maincontent, $data);
        $CI->load->view('inc/footer');
    }
}

if (!function_exists('business_info')) {
    function business_info($key = '')
    {
        $msg = '';
        switch ($key) {
            case 'address':
                $msg = 'ED-Ayurveda.com
                PO Box 11356 <br>
                Chicago, IL 60007
                USA';
                break;
            case 'email':
                $msg = 'service@ed-ayurveda.com';
                break;
            case 'phone':
                $msg = '+1 (314) 673-4653';
                break;
            case 'buname':
                $msg = 'ED Ayurvedic Health Consultant';
                break;
        }
        return $msg;
    }
}

if (!function_exists('social_media_links')) {
    function social_media_links($key = '')
    {
        $msg = '';
        switch ($key) {
            case 'facebook':
                $msg = 'https://www.facebook.com/ed-ayurveda';
                break;
            case 'instagram':
                $msg = 'https://www.instagram.com/ed-ayurveda';
                break;
            case 'twitter':
                $msg = 'https://www.twitter.com/ed-ayurveda';
                break;
            case 'linkedin':
                $msg = 'https://www.linkedin.com/ed-ayurveda';
                break;
        }
        return $msg;
    }
}
