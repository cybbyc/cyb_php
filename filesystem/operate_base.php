<?php
/**
 * Created by PhpStorm.
 * User: cyb
 * Date: 2017/3/7
 * Time: 23:40
 *
 * filesystem基础函数
 *
 */
header("content-type:text/html;charset=utf-8");

/*
 * basename(path):返回路径中的文件名部分
 * @param path [string] 必须，要检查的路径
 * @param suffix [string] 可选，规定文件的扩展名，如果有该参数，则不会输出这个扩展名
 * @return [string] 返回路径中的文件名
 *
 * */
$file_name = basename("H:\object\wwwroot\cybdata\file_operations/file.docx",".docx");
//echo $file_name;

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * copy(source,destination):拷贝文件
 * @param source [string] 必须，规定要复制的文件
 * @param destination [string] 必须，规定复制文件的目的地
 * @return [boolean] 成功返回true,失败返回FALSE，如果目标文件已存在，将会被覆盖
 *
 * */
//echo copy("file.docx","../file.docx");

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * dirname(path):返回路径中的目录部分
 * @param path [string] 必须，要检查的路径
 * @return [string] 返回去掉文件名的目录名
 * */
$file_dir = dirname("H:/object/wwwroot/cybdata/file_operations/file.docx");
//echo $file_dir;

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * readfile(path)函数用于打开一个文件并把它写入输出缓冲
 * 返回从文件中读入的字节数
 * @param path [string] 必须，要打开的文件路径
 * @return [string] 返回从文件中读入的字节数
 * */
//$file_readFile = readfile("text.txt");


/*---------------------------------------分割线--------------------------------------------------*/

/*
 * fopen(path,mode,include_path,context):打开一个文件或URL
 * @param path [string] 必须，要打开的文件或URL
 * @param mode [string] 必须，规定该文件的访问类型，如读、写，具体参考手册
 * @param include_path [boolean] 可选，如需要在include_path中检索文件，则设为1或true
 * @param context 可选
 * */
$file_fopen = fopen("text.txt","r");
//echo $file_fopen;

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * fread(file,length):读取打开的文件，可安全用于二进制文件
 * @param file [string] 必须，规定要读取的打开的文件
 * @param length [number] 必须，规定尧都区的最大字节数
 * @return [string] 返回所读取的字符串，如果出错，返回false
 * */
//$file_fread = fread($file_fopen,filesize("text.txt"));
//$file_fread = fread($file_fopen,50);
//$file_fread = fread($file_fopen,"50");
//echo $file_fread;

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * feof(file):检测文件是否已到达文件末尾(end-of-file)，可对长度未知的数据进行遍历
 * @param file [string] 必须，规定要检车的打开的文件
 * @return [boolean] 如果文件到了EOF或出错返回TRUE，否则返回一个错误，其他返回false
 * */
// if(!feof($file_fopen)){
    // echo "文件还未结束";
// }else{
    // echo "文件已被读完";
// }

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * fgets(file,length):从已打开的文件指针中读取一行
 * @param file [string] 必须，规定要读取的打开的文件
 * @param length [bit] 可选，规定要读取的字节数，默认1024
 * @return [string] 返回读取的字符串，失败或遇到eof返回false
 * */
//$file_oneLine = fgets($file_fopen,"30");     //调用fgets()后，文件指针移动到下一个字符
// $file_oneLine = fgets($file_fopen);
// echo $file_oneLine;

/*---------------------------------------分割线--------------------------------------------------*/

/* 
	fgetss(file,length,tags):从打开的文件中读取一行并过滤掉html和php标记
	@param file [string] 必须，规定要读取的打开的文件
	@param length [bit] 可选，规定要读取的字节数，默认1024
	@param tags [string] 可选，规定不会被过滤的标签
 */
 // echo fgetss($file_fopen,1024,"<h1>");
 

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * fgetc(file):从已打开的文件指针中读取一个字符
 * @param file [string] 必须，规定要读取的打开的文件
 * @return [string] 返回读取的字符，碰到eof返回false
 * */
// $file_oneChar = fgetc($file_fopen);     //调用fgetc()后，文件指针移动到未读位置
// while(!feof($file_fopen)){
    // $file_oneChar = fgetc($file_fopen);
    // echo $file_oneChar;
// }

/*---------------------------------------分割线--------------------------------------------------*/

/*
 * fclose(file):关闭一个已打开的文件
 * @param file [var] 必须，规定要关闭的文件，file是一个文件指针(变量)，指向已打开的文件
 * @return [boolean] 成功返回TRUE，失败返回false
 * */
// fclose($file_fopen);


/*---------------------------------------分割线--------------------------------------------------*/

/*
 * filesize(filename) :返回指定文件的大小
 * @param filename [string] 必须，规定要检查的文件
 * @return [bit] 返回文件大小的字节数，失败则返回false
 * */
$file_size = filesize("text.txt");
// echo $file_size;

/*---------------------------------------分割线--------------------------------------------------*/

/* 
	file(path,include_path,context):把整个文件读入一个数组中
	@param path [string] 必须，规定要读入的文件
	@param include_path 可选，如需要在include_path中检索文件，则设为1
	@param context 可选
	@return [array] 返回一个数组，文件的每一行为数组的每个元素
 */
 $file_arr = file("text.txt");
 // print_r($file_arr);
 
 /*---------------------------------------分割线--------------------------------------------------*/

/* 
	file_exists(path):检查一个文件或目录是否存在
	@param path [string] 必须，规定要检查的文件
	@return [boolean] 存在返回true，不存在返回false
 */
// if(file_exists("text.txt")){
	// echo "文件存在";
// }else{
	// echo "文件不存在";
// }

 /*---------------------------------------分割线--------------------------------------------------*/

/* 
	file_get_contents(path,include_path,context,start,max_length):检查一个文件或目录是否存在
	@param path [string] 必须，规定要读取的文件
	@param include_path 可选，如需要在include_path中检索文件，则设为1
	@param context 可选
	@param start 可选，在文件中开始读取的位置
	@param max_length 可选，读取的字节数
	@return [string] 返回一个字符串
 */
 $file_str = file_get_contents("text.txt");
 // echo $file_str;
 
/*---------------------------------------分割线--------------------------------------------------*/

/* 
	file_put_contents(file,data,mode,context):检查一个文件或目录是否存在
	@param file  必须，规定要写入数据的文件，如果文件不存在，会自动新建
	@param data 必须，规定要写入文件的数据，可以是字符串、数组(不能是多维)、数据流
	@param mode 可选，规定如何打开、写入文件，值有三个：	
		FILE_USE_INCLUDE_PATH：用新写入的数据覆盖以前的数据
		FILE_APPEND：使用该值则会在文件内容后面继续添加内容
		LOCK_EX：用新写入的数据覆盖以前的数据
	@param context 可选
	@param start 可选，在文件中开始读取的位置
	@param max_length 可选，读取的字节数
	@return [string] 返回写入到文件中的字节个数
 */
 // echo file_put_contents("text1.txt","我是新增内容，但是会覆盖原来的内容",LOCK_EX);
 
/*---------------------------------------分割线--------------------------------------------------*/

/* 
	fileatime(file):返回指定文件上次访问的时间
	@param file  必须，规定操作的文件
	@return 返回unix时间戳，出错返回false
	
	**Windows无效？
 */
 clearstatcache();
// echo date("Y-m-d H:i:s",fileatime("text1.txt"));

/*---------------------------------------分割线--------------------------------------------------*/

/* 
	filectime(file):返回指定文件上次访改变的时间
	@param file  必须，规定操作的文件
	@return 返回unix时间戳，出错返回false
	
	**Windows无效？
 */
 echo "<br>";
$file_update = date("Y-m-d H:i:s",filectime("text1.txt"));
 // echo $file_update;

 /*---------------------------------------分割线--------------------------------------------------*/

/* 
	filemtime(file):返回指定文件上次修改的时间
	@param file  必须，规定操作的文件
	@return 返回unix时间戳，出错返回false
 */
 echo "<br>";
// $file_update = date("Y-m-d H:i:s",filemtime("text1.txt"));
 // echo $file_update;

 /*---------------------------------------分割线--------------------------------------------------*/

/* 
	filetype(file):返回指定文件或目录的类型
	@param file  必须，规定操作的文件
	@return 成功，则可能返回7种可能的值，失败返回false
 */
 echo "<br>";
echo filetype(".idea");















