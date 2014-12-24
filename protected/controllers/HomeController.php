<? class HomeController extends controller{
    public $layout = 'column3';
    
    function actionIndex(){
        $criteria       = new CDbCriteria;
        $count          = Md_mahasiswa::model()->count($criteria);
        $pages          = new CPagination($count);
        $pages->pageSize= 1;
        $pages->applyLimit($criteria);
        
        $data['mhs']    = Md_mahasiswa::model()->findAll($criteria);
        $data['login']  = new LoginForm;
        $data['page']   = $pages;
        $this->render('view',$data);
    }
    
    function actionLogin(){
        $model=new LoginForm;
        
        if(isset($_POST['LoginForm'])){
            $model->attributes=$_POST['LoginForm'];
            if($model->validate() && $model->login()){
                Yii::app()->user->setFlash('success','Anda sudah berhasil login');
            }else{
                Yii::app()->user->setFlash('error','Username atau password salah');
            }
        }
        $this->redirect(array('index'));
    }
    
    function actionAdd(){
        if(isset($_POST['nama'])){
            $model = new md_mahasiswa;
            $model->nama    = $_POST['nama'];
            $model->kelas   = $_POST['kelas'];
            $model->nim     = $_POST['nim'];
            $model->jur     = $_POST['jur'];
            $model->save();
            Yii::app()->user->setFlash('success','Anda sudah berhasil menambahkan data');
        }
        $this->redirect(array('index'));
    }
    
    function actionEdit($id){
        $model = Md_mahasiswa::model()->findByPk($id);
        $data['mhs']=$model;
        if(isset($_POST['nama'])){
            $model->nama    = $_POST['nama'];
            $model->kelas   = $_POST['kelas'];
            $model->nim     = $_POST['nim'];
            $model->jur     = $_POST['jur'];
            if($model->save()){
                Yii::app()->user->setFlash('success','Anda sudah berhasil mengedit data');
                $this->redirect(array('index'));
            }
        }
        $this->render('edit',$data);
    }
    
    function actionDelete($id=null){
        if(Md_mahasiswa::model()->deleteByPk($id)){
            Yii::app()->user->setFlash('success','Anda sudah berhasil menghapus data');
            $this->redirect(array('index'));
        }
    }
    
    function actionLogout(){
        Yii::app()->user->logout();
        Yii::app()->user->setFlash('success','Anda sudah berhasil logout');
        $this->redirect(array('index'));
    }
}
