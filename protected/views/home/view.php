<?
foreach(Yii::app()->user->getFlashes() as $key => $message){
    echo "<div class='flash-$key'>$message</div>";
}

echo "<div class='content-atas'>
    <div class='left-content'>";
        if(!Yii::app()->user->isGuest){
            echo "<input type='button' onclick='window.location.href=\"".Yii::app()->createUrl('//home/logout')."\"' value='Logout'>";
        }else{
            echo "<input type='button' class='fancybox' href='#login' value='Login'>";
        }
        
        echo "<input type='button' class='fancybox' href='#inline1' value='Tambah Data'>
    </div>
</div>
<div class='content-tengah div-paging'>
    <table style='border-collapse: collapse; border:solid 1px #000;'>
        <tr style='border:solid 1px #000;'>
            <td>Nama</td>
            <td>Kelas</td>
            <td>NIM</td>
            <td>Jurusan</td>
            <td>Aksi</td>
        </tr>";
        if(count($mhs)>0){
            foreach($mhs as $row){
                echo "<tr>
                    <td>".$row->nama."</td>
                    <td>".$row->kelas."</td>
                    <td>".$row->nim."</td>
                    <td>".$row->jur."</td>
                    <td>";
                        if(!Yii::app()->user->isGuest){
                            echo "<a class='fancybox' href='".Yii::app()->baseUrl."/home/edit/".$row->id."' >Edit</a> | <a href='".Yii::app()->baseUrl."/home/delete/".$row->id."' onclick='return confirm(\"Anda yakin akan menghapus konten ini?\") '>Hapus</a></td>";
                        }else{
                            echo "<i>Please Login</i>";
                        }
                        
                echo "</tr>";
            }
        }else{
            echo "<tr><td colspan=5 style='text-align:center'>Data masih kosong</td></tr>";
        }
    echo "</table>
    <div class='paging' style='float:right'>";
    $this->widget('CLinkPager',array('pages'=>$page));
echo "</div>
</div>
<div id='inline1' style='width:300px;display: none;'>
    <h3>Tambah Mahasiswa</h3>
    <div class='form'>
        <form action='".Yii::app()->baseUrl."/home/add' method='post' id='form-add'>
            <div class='row'>
                <label for='nama'>Nama Lengkap</label>
                <input type='text' name='nama'/>
            </div>
            <div class='row'>
                <label for='kelas'>Kelas</label>
                <input type='text' name='kelas'/>
            </div>
            <div class='row'>
                <label for='nim'>NIM</label>
                <input type='text' name='nim'/>
            </div>
            <div class='row'>
                <label for='jur'>Jurusan</label>
                <input type='text' name='jur'/>
            </div>
            <div class='row'>
                <input type='submit' value='Simpan'/>
            </div>
        </form>
    </div>
</div>
<div id='login' style='width:300px;display: none;'>
    <h3>Login User</h3>
    <div class='form'>";
        $form=$this->beginWidget('CActiveForm', array(
            'id'=>'form-login',
            'action'=>Yii::app()->createUrl('//home/login'),
        ));
            
            echo "<div class='row'>
                <label for='username'>Username</label>
                ".$form->textField($login,'username')."
            </div>
            <div class='row'>
                <label for='password'>Password</label>
                ".$form->passwordField($login,'password')."
            </div>
            <div class='row'>
                <input type='submit' value='Simpan'/>
            </div>";
        $this->endWidget();
    echo "</div>
</div>
";
?>
