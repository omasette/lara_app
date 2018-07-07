<?php
die('here');
//Filey3C.php
class File3C{
  //file properties
  public $filename;
  private $filesize;
  //constructor
public function __construct($fn){
  $this->filename=$fn;
  //if the file doesnt exist create it
  if(!file_exists($this->filename))
  fopen($this->filename,'w');

  $this->filesize=filesize($this->filename);
}
public function getFileSize(){
  return $this->filesize;
}
public function someka(){
  return (is_readable($this->filename)) ? 'Yes' :'No';
}
public function andikika(){
  return (is_writable($this->filename)) ? 'Yes' :'No';
}
public function soma(){
  return file_get_contents($this->filename);
}
 public function andika ($content,$mode){
   //open
   fopen($this->filename,$mode);
   //write
   fwrite($this->filename,$content);
   //close
   fclose ($this->filename);
 }
}

$filey = new File3C('form34b.txt');
echo "<p> File name : {$filey->filename}";
echo "<p> File size : {$filey->getFileSize()} bytes";
echo "<p> Readable? :{$filey->someka()}</p>";
echo "<p> Writable? :{$filey->andikika()}</p>";
echo "<p> Contents : {$filey->soma()}</p>";
//write something
$filey->andika("h1> First write</h1>",'a');
echo"<p> Contents : {$filey->soma()}</p>";
$filey->andika("h2> Second write</h2>",'a');
echo"<p> Contents : {$filey->soma()}</p>";
$filey->andika("h1> First write</h1>",'a');

?>
