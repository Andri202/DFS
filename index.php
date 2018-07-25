<!-- 
    //https://www.numetriclabz.com/depth-first-search-in-php/
<?php
    class Graph{  private $len = 0;
        private $graph = array();
        private $visited = array();
        public function __construct(){ //PHP5 untuk inisialisasi constructor Objek OOP
            $this->graph = array(
                array(0, 1, 1, 0, 0, 0),
                array(1, 0, 0, 1, 0, 0),
                array(1, 0, 0, 1, 1, 1),
                array(0, 1, 1, 0, 1, 0),
                array(0, 0, 1, 1, 0, 1),
                array(0, 0, 1, 0, 1, 0)
            );
        $this->len = count($this->graph);
        $this->init();
        echo $this->len;
        }
       function init(){
           for ($i = 0; $i< $this->len; $i++) {
                $this->visited[$i] = 0;
            }
        }
       function depthFirst($vertex){
           $this->visited[$vertex] = 1;
           for ($i = 0; $i< $this->len; $i++) {
               if ($this->graph[$vertex][$i] == 1 && !$this->visited[$i]) {
                    $this->depthFirst($i);
                }
            }
            echo "$vertex<br>";
        }
    }
    $g = new Graph();
    $g->depthFirst(5);
 ?> -->

<?php
//https://www.elangsakti.com/2013/02/implementasi-algoritma-depth-first.html
/*     1
 *    / \
 *   2   3___
 *  / \  | \ \
 * 4   5 6  7 8
 *
 */
 
$ar[1]['parent']=0;
$ar[1]['value']=1;
$ar[1]['name']='Agus';
$ar[1]['posisi']='Ketua';
 
$ar[2]['parent']=1;
$ar[2]['value']=2;
$ar[2]['name']='Novan';
$ar[2]['posisi']='Wakil 1';
 
$ar[3]['parent']=1;
$ar[3]['value']=3;
$ar[3]['name']='Budi';
$ar[3]['posisi']='Wakil 2';
 
$ar[4]['parent']=2;
$ar[4]['value']=4;
$ar[4]['name']='Syauqil';
$ar[4]['posisi']='Anggota';
 
$ar[5]['parent']=2;
$ar[5]['value']=5;
$ar[5]['name']='Aji';
$ar[5]['posisi']='Anggota';
 
$ar[6]['parent']=3;
$ar[6]['value']=6;
$ar[6]['name']='Wildan';
$ar[6]['posisi']='Anggota';
 
$ar[7]['parent']=3;
$ar[7]['value']=7;
$ar[7]['name']='Ni\'am';
$ar[7]['posisi']='Anggota';
 
$ar[8]['parent']=3;
$ar[8]['value']=8;
$ar[8]['name']='Bayu';
$ar[8]['posisi']='Anggota';
 
function dfs($arr,$parent,$base,$word){
 global $explc;
 global $explv;
 $explc++;
 
    for($a=1; $a<=count($arr); $a++){

        // $explv[$explc]['test'] = $arr[$a]['parent'];
        // $explv[$explc]['test1'] = $parent;
        // if($parent==0){
        //     $a=$a+1;
        //     $explv[$explc]['parent'] = $arr[$a-1]['parent'];
        //     $explv[$explc]['value'] = $arr[$a-1]['value'];
        //     $explv[$explc]['name'] = $arr[$a-1]['name'];
        //     $explv[$explc]['posisi'] = $arr[$a-1]['posisi'];
        //     $a=$a-1;
        //     $explv[$explc]['base'] = $base;
        // }
        // if($arr[$a]['parent']==$parent){
            if($arr[$a]['parent']==$parent){
                $explv[$explc]['parent'] = $arr[$a]['parent'];
                $explv[$explc]['value'] = $arr[$a]['value'];
                $explv[$explc]['name'] = $arr[$a]['name'];
                $explv[$explc]['posisi'] = $arr[$a]['posisi'];

                $explv[$explc]['base'] = $base;
                $base++;
                dfs($arr,$arr[$a]['value'],$base);
                //$base--;
            }
        // }
    }
}
 
function spaci($jumlah,$tanda){
    for($a=0;$a<$jumlah;$a++) echo $tanda;
}
echo "<br>";
global $explv,$explc;
$explc = -1;
dfs($ar,0,0);
for($a=0; $a<$explc; $a++){
echo $explv[$a]['name']." (".$explv[$a]['posisi'].")<br>";
}
unset($explc);
unset($explv);
?>