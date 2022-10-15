<?php 
Class Box{
    public $name="box";
}
$box =new Box;
$box_refernce=$box;
$box_clone=clone $box;

$new=&$box;
$box->name="modfified";

$box_modified=clone $box;
$box_modified->name="changed box";

$another_box = new Box;


echo "refrence ".($box==$box_refernce ? 'T' :'F')."<br>";
echo "clone ".($box==$box_clone ? 'T' :'F')."<br>";
echo "modified ".($box==$box_modified ? 'T' :'F')."<br>";
echo "Another ".($box==$another_box ? 'T' :'F')."<br>";
echo "new ".($box==$new ? 'T' :'F')."<br>";




echo "<hr>";

echo "refrence ".($box===$box_refernce ? 'T' :'F')."<br>";
echo "clone ".($box===$box_clone ? 'T' :'F')."<br>";
echo "modified ".($box===$box_modified ? 'T' :'F')."<br>";
echo "Another ".($box===$another_box ? 'T' :'F')."<br>";
echo "new ".($box===$new ? 'T' :'F')."<br>";











?>