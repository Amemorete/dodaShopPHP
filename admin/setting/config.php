<?php 

  
class project2
	
{
	public $server = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "dodashop";
	public $connectdb;
	
	function __construct()
	{
		$this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
		if($this->connectdb->connect_error)
		{
			die("connection failed");
		}
	}
	
    public function hackme()
    {
        $this->connectdb = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        return $this->connectdb;
    }
	public function student_login_check($st_username,$st_password)
	{ 
		$st_login_check = "SELECT  * from users where email = '$st_username' and password='$st_password'";
		$st_login_run = $this->connectdb->query($st_login_check);
		$st_login_num = $st_login_run->num_rows;
		return $st_login_num;
	}

	/*public function student_info_select($st_username)
	{
		$student_info_sel = "SELECT * from st_info where st_username='$st_username'";
		$student_info_run = $this->connectdb->query($student_info_sel);
		
		return $student_info_run;
	}
	public function student_count()
	{
		$student_info_sel = "SELECT * from st_info";
		$student_info_run = $this->connectdb->query($student_info_sel);
		
		return $student_info_run;
	}*/
		
	
	/////////////////////////////// ADMINNNNNNNNNNNNNNNNN--------------------------
	
	public function meadmin_check($admin_username,$admin_password)
	{
		$meadin_login_select = "SELECT * from users where email='$admin_username' AND password='$admin_password'";
		$meadmin_login_run = $this->connectdb->query($meadin_login_select);
		// var_dump($meadmin_login_run);
		if($meadmin_login_run){
		$meadmin_login_num = $meadmin_login_run->num_rows;
		return $meadmin_login_num;
		}
		
	}
	public function meadmin_username($adminname)
	{
		$meadmin_username_select = "SELECT * from meadmin where admin_username='$adminname'";
		$meadmin_username_run = $this->connectdb->query($meadmin_username_select);
		return $meadmin_username_run;
	}

	public function meadmin_updatepassword($password_update,$username)
	{
		$admin_password_update = "UPDATE meadmin set 	admin_password='$password_update', admin_username='$username'";
		$password_update_run = $this->connectdb->query($admin_password_update);
		return $password_update_run;
	}
	
	//////////////////////////////////Teacher Info ////////////////////////////////
	public function teacher_info($adminname,$t_staff_type)
	{
		switch($t_staff_type)
		{
			case "Admin":
			$teacher_info_select = "SELECT * from teacher_info where t_staff_type='$t_staff_type' AND t_username='$adminname'";
			break;
			case "Teacher":
			$teacher_info_select = "SELECT * from teacher_info where t_staff_type='$t_staff_type' AND t_username='$adminname'";
			break;
			default :
				echo "no teacher found";
		}
		$teacher_info_select_run = $this->connectdb->query($teacher_info_select);
		return $teacher_info_select_run;
		
	
		
	}

	/// get categorie
	public function categorie_info_display_admin()
	{
		$categorie_info_admin = "SELECT * from categorie";
		$categorie_info_admin_run = $this->connectdb->query($categorie_info_admin);
		return $categorie_info_admin_run;
	}
	/// get produit
	public function produit_info_display_admin()
	{
		$produit_info_admin = "SELECT * from produit p, categorie c where p.id_categorie=c.id";
		$produit_info_admin_run = $this->connectdb->query($produit_info_admin);
		return $produit_info_admin_run;
	}

	//getAll user
	public function user_info_display_admin()
	{
		$user_info_admin = "SELECT * from users";
		$user_info_admin_run = $this->connectdb->query($user_info_admin);
		return $user_info_admin_run;
	}
	//getById user
	public function userBy_info_display_admin($up_userid)
	{
		$user_info_admin = "SELECT * from users where id='$up_userid'";
		$user_info_admin_run = $this->connectdb->query($user_info_admin);
		return $user_info_admin_run;
	}



	//add categorie


	public function add_categorie($add_c_categorie)
	{
	$add_categorie = "insert into categorie (libelle) value ('$add_c_categorie')";
	$add_categorie_run = $this->connectdb->query($add_categorie);
		return $add_categorie_run;
	}
	//update categorie
	public function update_categorie($add_c_libelle,$date,$up_categorieid)
	{
	$add_categorie = "UPDATE categorie set libelle='$add_c_libelle',date_update='$date'  where id='$up_categorieid'";
	$add_categorie_run = $this->connectdb->query($add_categorie);
		return $add_categorie_run;
	}

	//////// delete categorie form admin //////////////////////
	public function delete_categorie($del_categorie)
	{
	$categorie_user_info = " delete from categorie where id='$del_categorie' ";
	$categorie_user_info_run = $this->connectdb->query($categorie_user_info);
	return $categorie_user_info_run;
	}
	

	//add users
	public function add_user($std_abilite,$std_adresse,$std_date,$std_email,$std_nom,$std_password,$std_prenom, $std_sexe)
	{
		$add_users = "insert into users (abilite,adresse,date_naissance,email,nom,password,prenom,sexe) value ('$std_abilite','$std_adresse','$std_date','$std_email','$std_nom','$std_password','$std_prenom', '$std_sexe')";
		$add_user_run = $this->connectdb->query($add_users);
		
		return $add_user_run;
	}
	
	

	//update users
	public function up_user($std_abilite,$std_adresse,$std_date,$std_email,$std_nom,$std_password,$std_prenom, $std_sexe, $std_date_up,$up_userid)
	{
		$up_users = "UPDATE users set  abilite='$std_abilite',adresse='$std_adresse',date_naissance='$std_date',
		email='$std_email',nom='$std_nom',password='$std_password',prenom='$std_prenom',sexe='$std_sexe' , date_update='$std_date_up' where id='$up_userid'";
		
		$up_user_run = $this->connectdb->query($up_users);
		
		return $up_user_run;
	}

	//////// delete user form admin //////////////////////
	public function delete_user($del_user)
	{
	$delete_user_info = " delete from users where id='$del_user' ";
	$delete_user_info_run = $this->connectdb->query($delete_user_info);
	return $delete_user_info_run;
	}













	///// display teacher info in  student panel
	public function teacher_info_instudent($st_grade)
	{
		$teacher_info_instudent_select = "SELECT * from subjects_info where grade='$st_grade'";
		$teacher_info_instudent_run = $this->connectdb->query($teacher_info_instudent_select);
		return $teacher_info_instudent_run;
		
	}
	////////////////////////End Teacher Info ------------//////////////////////
	
	///////////////////////// student password update //////////
	
	public function student_password_change($st_password_update,$st_username)
	{
		$student_password_update = "UPDATE st_info set st_password='$st_password_update' where st_username='$st_username'";
		$student_password_update_run = $this->connectdb->query($student_password_update);
		return $student_password_update_run;
	}
	
	
	
	///////////////////------- end student password update --------------//////////////
	
	///////////////////-------- display subject in admin ----------------////////
	public function subject_info()
	{
		
		$subject_info_admin = "SELECT * from subjects_info";
		$subject_info_admin_run = $this->connectdb->query($subject_info_admin);
		return $subject_info_admin_run;
	}
	
	////////////  edit teacher information ////////////////////
	
	public function edit_teacherid($teacher_id)
	{
		$edit_teacherid = "SELECT * from teacher_info where t_id='$teacher_id'";
		$edit_teacherid_run = $this->connectdb->query($edit_teacherid);
		return $edit_teacherid_run;
	}
	///////////////// update teacher info from admin/////////////
	public function update_teacher_info($up_fullname,$up_address,$up_email,$up_father,$up_mother,$up_dob,$up_qualification,$up_contact,$up_staff,$up_gender,$teacher_id)
	{
		$update_teacher_info_select = "UPDATE teacher_info set t_fullname='$up_fullname',t_address='$up_address',t_email='$up_email',t_father='$up_father',t_mother='$up_mother',t_dob='$up_dob',t_qualification='$up_qualification',t_contact='$up_contact',t_staff_type='$up_staff',t_gender='$up_gender' where t_id='$teacher_id'";
		$update_teacher_info_run = $this->connectdb->query($update_teacher_info_select);
		return $update_teacher_info_run;
	}
	
	////////// add new teacher form admin ////////////////////////
	public function add_teacher($add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender)
	{
	$add_teacher = "insert into teacher_info(t_fullname,t_address,t_email,t_username,t_pass,t_father,t_mother,t_dob,t_qualification,t_contact,t_staff_type,t_gender) value('$add_t_fullname','$add_t_address','$add_t_email','$add_t_username','$add_t_pass','$add_t_father','$add_t_mother','$add_t_dob','$add_t_qualification','$add_t_contact','$add_t_staff','$add_t_gender')";
	$add_teacher_run = $this->connectdb->query($add_teacher);
		return $add_teacher_run;
	}
	
	
	////////////////////// looping class from subject info table////////////////
	public function grade($grade)
	{
		$grade_select = "SELECT class from sub_class_name";
		$grade_run = $this->connectdb->query($grade_select);
		return $grade_run;
	}
	
	///////////// display data from st_info select st-grade ///////////
	public function grade_st_info($grade_st_data)
	{
		$grade_st_info_select = "SELECT * from st_info where st_grade='$grade_st_data'";
		$grade_st_info_run = $this->connectdb->query($grade_st_info_select);
		return $grade_st_info_run;
	}
	////////// student info display by admin //////////////////////////
	public function student_info_display_admin($class_students_data)
	{
		$student_info_display_admin_select = "SELECT * from st_info where st_grade='$class_students_data'";
		$student_info_display_admin_run = $this->connectdb->query($student_info_display_admin_select);
		return $student_info_display_admin_run;
	}
	/////////// add student from admin panel /////////////////////
	public function add_student($std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact)
	{
		$add_student_insert = "insert into st_info(st_fullname,st_username,st_password,st_grade,roll_no,st_dob,st_address,st_district,st_gender,st_father,st_mother,st_parents_contact) value('$std_fullname','$std_username','$std_password','$std_grade','$std_roll','$std_dob','$std_address','$std_district','$std_gender','$std_father','$std_mother','$std_parent_contact')";
		$add_student_run = $this->connectdb->query($add_student_insert);
		return $add_student_run;
	}
	
	///////////// General Information about website ///////////
	public function general_setting($web_name,$web_address,$web_phone1,$web_phone2,$web_email1,$web_email2,$web_start,$web_about)
	{
		$general_setting_insert = "insert into general_setting(website_name,website_address,website_phone1,website_phone2,website_email1,website_email2,website_start,web_about) value('$web_name','$web_address','$web_phone1','$web_phone2','$web_email1','$web_email2','$web_start','$web_about')";
		$general_setting_run = $this->connectdb->query($general_setting_insert);
		return $general_setting_run;
	}
	public function general_setting_check()
	{
		$general_setting_check = "SELECT * from general_setting";
		$general_setting_run = $this->connectdb->query($general_setting_check);
		return $general_setting_run;
	}
	public function general_setting_update($upweb_name,$upweb_address,$upweb_phone1,$upweb_phone2,$upweb_email1,$upweb_email2,$upweb_start,$upweb_about)
	{
		$update_general_setting = "UPDATE general_setting set website_name='$upweb_name',website_address='$upweb_address',website_phone1='$upweb_phone1',website_phone2='$upweb_phone2',website_email1='$upweb_email1',website_email2='$upweb_email2',website_start='$upweb_start',web_about='$upweb_about'";
	 $update_general_run = $this->connectdb->query($update_general_setting);
		return $update_general_run;
	}
	public function meravi_add_table($Nepdev_table_Name,$Nepdev_student_name,$Nepdev_student_grade,$Nepdev_subject1,$Nepdev_subject2,$Nepdev_subject3,$Nepdev_subject4,$Nepdev_subject5,$Nepdev_subject6,$Nepdev_subject7,$Nepdev_subject8,$Nepdev_subject9,$Nepdev_subject10,$Nepdev_subject11)
	{
		$Meravi_database = "CREATE TABLE $Nepdev_table_Name(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,$Nepdev_student_name varchar(250) Null,$Nepdev_student_grade varchar(10) null,$Nepdev_subject1 varchar(250) null,$Nepdev_subject2 varchar(250) null,$Nepdev_subject3 varchar(250) null,$Nepdev_subject4 varchar(250) null,$Nepdev_subject5 varchar(250) null,$Nepdev_subject6 varchar(250) null,$Nepdev_subject7 varchar(250) null,$Nepdev_subject8 varchar(250) null,$Nepdev_subject9 varchar(250) null,$Nepdev_subject10 varchar(250) null,$Nepdev_subject11 varchar(250) null)";
		$Meravi_run = $this->connectdb->query($Meravi_database);
		return $Meravi_run;
	}
	public function Nepdev_Exam_Term($Nepdev_exam_term)
	{
		$Nepdev_Select = "SELECT * FROM exam_term where name='$Nepdev_exam_term'";
		$Nepdev_Run = $this->connectdb->query($Nepdev_Select);
		if($Nepdev_Run->num_rows>0)
		{
			echo "<script>alert('You Have ALready Added $Nepdev_exam_term');</script>";
		}
		else
		{
			$Nepdev_Add = "INSERT INTO exam_term(name) VALUES('$Nepdev_exam_term')";
			$Nedev_Add_Run = $this->connectdb->query($Nepdev_Add);
			if($Nedev_Add_Run==true)
			{
				echo "<script>alert('Success Added $Nepdev_exam_term');</script>";
				}
			}
			return 	$Nepdev_Run;
	}
	}
$ravi = new project2;