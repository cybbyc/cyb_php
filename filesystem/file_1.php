<?php
	header("content-type:text/html;charset=utf-8");

function read_docx($filename){

    $striped_content = '';
    $content = '';

    if(!$filename || !file_exists($filename)) return false;

    $zip = zip_open($filename);
    if (!$zip || is_numeric($zip)) return false;

    while ($zip_entry = zip_read($zip)) {

        if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

        if (zip_entry_name($zip_entry) != "word/document.xml") continue;

        $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

        zip_entry_close($zip_entry);
    }
    zip_close($zip);      
    $content = str_replace('</w:r></w:p></w:tc><w:tc>', "<p>", $content);
    $content = str_replace('</w:r></w:p>', "</p>", $content);
    $striped_content = strip_tags($content);

    return array(
        "strip_content"=>$striped_content,
        "content"=>$content);
}
//test
$_arr = read_docx('file.docx');
//print_r($_arr['content']);
print_r($_arr['strip_content']);
?>