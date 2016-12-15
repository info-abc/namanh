<?php

/* mm/dd/yyyy to Y-m-d H:i:s */
function convertDateTime($dateString, $paramString = '/')
{
	return $dateString . ' 00:00:00';
	// $array = explode($paramString,$dateString);
	// $datetime = $array[2].'-'.$array[0].'-'.$array[1].' 00:00:00';
	// return $datetime;
}

function getIpAddress()
{
	$ip = $_SERVER['REMOTE_ADDR'];
	return $ip;
}

//add time to filename
function changeFileNameImage($filename)
{
	$file = getFilename($filename);
	$str = strtotime(date('Y-m-d H:i:s'));
	$fileNameAfter = $file. '-' . $str;
	$extension = getExtension($filename);
	return $fileNameAfter.'.'.$extension;
}

// show 0 for null
function getZero($number = null)
{
	if($number != '') {
		return $number;
	}
	return 0;
}
//get extension from filename
function getExtension($filename = null)
{
	if($filename != '') {
		return pathinfo($filename, PATHINFO_EXTENSION);
	}
	return null;
}
//get filename from filename
function getFilename($filename = null)
{
	if($filename != '') {
		return pathinfo($filename, PATHINFO_FILENAME);
	}
	return null;
}
//cut trim text
function limit_text($text, $len) {
    if (strlen($text) < $len) {
        return $text;
    }
    $text_words = explode(' ', $text);
    $out = null;
    foreach ($text_words as $word) {
        if ((strlen($word) > $len) && $out == null) {

            return substr($word, 0, $len) . "...";
        }
        if ((strlen($out) + strlen($word)) > $len) {
            return $out . "...";
        }
        $out.=" " . $word;
    }
    return $out;
}
//limit character
function limit_character($text, $len) {
    if (strlen($text) <= $len) return $text;
    $newtext = substr($text, 0, $len);
    if (substr($newtext, -1, 1) != ' ') $newtext = substr($newtext, 0, strrpos($newtext, " "));
    return $newtext;
}
//check file exist
function remoteFileExists($url) {
    $curl = curl_init($url);

    //don't fetch the actual page, you only want to check the connection is ok
    curl_setopt($curl, CURLOPT_NOBODY, true);

    //do request
    $result = curl_exec($curl);

    $ret = false;

    //if request did not fail
    if ($result !== false) {
        //if request was ok, check response code
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($statusCode == 200) {
            $ret = true;
        }
    }

    curl_close($curl);

    return $ret;
}

function checkActive($url = '')
{
    $currentUrl = Request::url();
	if ($currentUrl == url($url)) {
		return 'class = "current"';
	}
	return;
}

/* Y-m-d H:i:s to d-m-Y H:i:s */
function showDateTime($dateString = null)
{
	if($dateString == null) {
		return false;
	}
	$array = explode(' ', $dateString);
	$dmY = explode('-', $array[0]);
	$His = explode(':', $array[1]);
	$datetime = $dmY[2].'-'.$dmY[1].'-'.$dmY[0].' '.$His[0].':'.$His[1];
	return $datetime;
}

function convert_string_vi_to_en($str){
    $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd'=>'đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'D'=>'Đ',
        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
    );
    foreach($unicode as $nonUnicode=>$uni){
        $str = preg_replace("/($uni)/i", $nonUnicode, $str);
    }
    return $str;
}

function show_date_vn()
{
    $day_array = array(
        'Monday' => 'Thứ hai',
        'Tuesday' => 'Thứ ba',
        'Wednesday' => 'Thứ tư',
        'Thursday' => 'Thứ năm',
        'Friday' => 'Thứ sáu',
        'Saturday' => 'Thứ bảy',
        'Sunday' => 'Chủ nhật',
    );
    $day = $day_array[date('l')];

    // $hour = date('G');
    // if(in_array($hour, array('0','1','2')))
    // {
    //     $apm = 'Khuya';
    // }elseif(in_array($hour, array('3','4','5','6','7','8','9','10')))
    // {
    //     $apm = 'Sáng';
    // }elseif(in_array($hour, array('11','12','13')))
    // {
    //     $apm = 'Trưa';
    // }elseif(in_array($hour, array('14','15','16','17','18')))
    // {
    //     $apm = 'Chiều';
    // }elseif(in_array($hour, array('19','20','21','22','23')))
    // {
    //     $apm = 'Tối';
    // }else{
    //     $apm = '';
    // }
    // echo $day . ', ' . date('d/m/Y - h:i') . ' ' . $apm . ' (GMT +7)';
    echo $day . ', ' . date('d/m/Y | h:i') . ' GMT+7';
}

function removeTagsHtml($text)
{
    $text = strip_tags($text);
    $text = html_entity_decode($text);
    return $text;
}
function convertToSlug($string)
{
    $slug = convert_string_vi_to_en($string);
    $rs = strtolower(preg_replace('/[^a-zA-Z0-9]+/i','-', $slug));
    return $rs;
}
