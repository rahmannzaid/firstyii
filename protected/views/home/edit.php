<?="
<h3>Edit Mahasiswa</h3>
<div class='form'>
    <form action='".Yii::app()->baseUrl."/home/edit/".$mhs->id."' method='post' id='form-add'>
        <div class='row'>
            <label for='nama'>Nama Lengkap</label>
            <input type='text' name='nama'  value='".$mhs->nama."'/>
        </div>
        <div class='row'>
            <label for='kelas'>Kelas</label>
            <input type='text' name='kelas'  value='".$mhs->kelas."'/>
        </div>
        <div class='row'>
            <label for='nim'>NIM</label>
            <input type='text' name='nim'  value='".$mhs->nim."'/>
        </div>
        <div class='row'>
            <label for='jur'>Jurusan</label>
            <input type='text' name='jur'  value='".$mhs->jur."'/>
        </div>
        <div class='row'>
            <input type='submit' value='Simpan'/>
        </div>
    </form>
</div>

";?>