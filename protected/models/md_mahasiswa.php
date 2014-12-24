<? class Md_mahasiswa extends CActiveRecord{
    public static function model($className=__CLASS__){
        return parent::model($className);
    }
    
    function tableName(){
        return 'tb_mahasiswa';
    }
    
    function attributeLabels(){
        return array(
            'id'    => 'ID',
            'nama'  => 'Nama',
            'nim'   => 'NIM',
            'kelas' => 'Kelas',
            'jur'   => 'Jurusan',
        );
    }
    
    function rules(){
        return array(
           array('nama,nim,kelas,jur','required'),
        );
    }
}
