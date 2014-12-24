<?="
<table style='border-collapse: collapse; border:solid 1px #000;'>
    <tr style='border:solid 1px #000;'>
        <td>Nama</td>
        <td>Kelas</td>
        <td>NIM</td>
        <td>Jurusan</td>
        <td>Aksi</td>
    </tr>";
    foreach($mhs as $row){
        echo "<tr>
            <td>".$row->nama."</td>
            <td>".$row->kelas."</td>
            <td>".$row->nim."</td>
            <td>".$row->jur."</td>
            <td><a class='fancybox' href='".Yii::app()->baseUrl."/home/edit/".$row->id."' >Edit</a> | <a href='".Yii::app()->baseUrl."/home/delete/".$row->id."' onclick='return confirm(\"Anda yakin akan menghapus konten ini?\") '>Hapus</a></td>
        </tr>";
    }
echo "</table>
<div class='paging' style='float:right'>";
$this->widget('CLinkPager',array('pages'=>$page));
echo "</div>
";?>