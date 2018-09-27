<?php
require_once("../phpmailer/class.phpmailer.php");	
include("../config.php");
//include("fun.php");

	if(isset($_GET['call']) == "")
	{ } else {
		$call = $_GET['call'];
		if($call == "login") {
			login();
		}else if($call == "user_type_list") {
            user_type_list();
        }else if($call == "task_list") {
            task_list();
        }else if($call == "ad_list") {
            ad_list();
        }else if($call == "save_task") {
            save_task();
        }else if($call == "delete_email_address") {
            delete_email_address();
        }else if($call == "ngo_list") {
            ngo_list();
        }else if($call == "schl_nm") {
            schl_nm();
        }else if($call == "ngo_nm") {
            ngo_nm();
        }else if($call == "vol_nm") {
            vol_nm();
        }else if($call == "vol_nm1") {
            vol_nm1();
        }else if($call == "stud_nm") {
            stud_nm();
        }else if($call == "ven_list") {
            ven_list();
        }else if($call == "email") {
            email();
        }else if($call == "email_ngo") {
            email_ngo();
        }else if($call == "email_school") {
            email_school();
        }else if($call == "email_stdudent") {
            email_stdudent();
        }else if($call == "email_pven") {
            email_pven();
        }else if($call == "email_cven") {
            email_cven();
        }else if($call == "ven_nm") {
            ven_nm();
        }else if($call == "cven_nm") {
            cven_nm();
        }else if($call == "edit_ngo"){
			edit_ngo();
		}else if($call == "school_list"){
			school_list();
		}else if($call == "edit_school"){
			edit_school();
		}else if($call == "sudent_list"){
			sudent_list();
		}else if($call == "edit_student"){
			edit_student();
		}else if($call == "volun_list"){
			volun_list();
		}else if($call == "edit_volun"){
			edit_volun();
		}else if($call == "pdon_list"){
			pdon_list();
		}else if($call == "edit_pdonor"){
			edit_pdonor();
		}else if($call == "cdon_list"){
			cdon_list();
		}else if($call == "edit_cdonor"){
			edit_cdonor();
		}else if($call == "cven_list"){
			cven_list();
		}else if($call == "edit_cvendor"){
			edit_cvendor();
		}else if($call == "pven_list"){
			pven_list();
		}else if($call == "edit_pvendor"){
			edit_pvendor();
		}else if($call == "master_nm"){
			master_nm();
		}else if($call == "prime_nm"){
			prime_nm();
		}else if($call == "prime_name"){
			prime_name();
		}else if($call == "sub_nm"){
			sub_nm();
		}else if($call == "sub_name"){
			sub_name();
		}else if($call == "board_nm"){
			board_nm();
		}else if($call == "midium_nm"){
			midium_nm();
		}else if($call == "class_nm"){
			class_nm();
		}else if($call == "projs"){
			projs();
		}else if($call == "add_topic"){
			add_topic();
		}else if($call == "add_master"){
			add_master();
		}else if($call == "add_prime"){
			add_prime();
		}else if($call == "add_sub"){
			add_sub();
		}else if($call == "add_medium"){
			add_medium();
		}else if($call == "medium_list"){
			medium_list();
		}else if($call == "edit_medium"){
			edit_medium();
		}else if($call == "delete_medium"){
			delete_medium();
		}else if($call == "add_class"){
			add_class();
		}else if($call == "class_list"){
			class_list();
		}else if($call == "delete_class"){
			delete_class();
		}else if($call == "edit_class"){
			edit_class();
		}else if($call == "add_board"){
			add_board();
		}else if($call == "board_list"){
			board_list();
		}else if($call == "edit_board"){
			edit_board();
		}else if($call == "delete_board"){
			delete_board();
		}else if($call == "master_list"){
			master_list();
		}else if($call == "edit_master"){
			edit_master();
		}else if($call == "delete_master"){
			delete_master();
		}else if($call == "prime_list"){
			prime_list();
		}else if($call == "edit_prime"){
			edit_prime();
		}else if($call == "delete_prime"){
			delete_prime();
		}else if($call == "sub_list"){
			sub_list();
		}else if($call == "edit_sub"){
			edit_sub();
		}else if($call == "delete_sub"){
			delete_sub();
		}else if($call == "add_product"){
			add_product();
		}else if($call == "product_list"){
			product_list();
		}else if($call == "edit_product"){
			edit_product();
		}else if($call == "delete_product"){
			delete_product();
		}else if($call == "add_project"){
			add_project();
		}else if($call == "project_list"){
			project_list();
		}else if($call == "edit_project"){
			edit_project();
		}else if($call == "delete_project"){
			delete_project();
		}else if($call == "add_proj_cate"){
			add_proj_cate();
		}else if($call == "edit_proj_cate"){
			edit_proj_cate();
		}else if($call == "proj_cate_list"){
			proj_cate_list();
		}else if($call == "delete_proj_cate"){
			delete_proj_cate();
		}else if($call == "add_help"){
			add_help();
		}else if($call == "help_list"){
			help_list();
		}else if($call == "edit_help"){
			edit_help();
		}else if($call == "delete_help"){
			delete_help();
		}else if($call == "send_mail"){
			send_mail();
		}else if($call == "user_type_insert"){
			user_type_insert();
		}else if($call == "user_type_delete"){
			user_type_delete();
		}else if($call == "task_category_insert"){
			task_category_insert();
		}else if($call == "task_category_list"){
			task_category_list();
		}else if($call == "task_category_delete"){
			task_category_delete();
		}else if($call == "admin_category_insert"){
			admin_category_insert();
		}else if($call == "admin_category_list"){
			admin_category_list();
		}else if($call == "admin_category_delete"){
			admin_category_delete();
		}else if($call == "save_admin"){
			save_admin();
		}else if($call == "ad_delete"){
			ad_delete();
		}else if($call == "task_delete"){
			task_delete();
		}else if($call == "remove_attach_file_task"){
			remove_attach_file_task();
		}else if($call == "topic_lists"){
			topic_list();
		}else if($call == "delete_topic"){
			delete_topic();
		}else if($call == "search_topic_name"){
			search_topic_name();
		}else if($call == "search_master_name"){
			search_master_name();
		}else if($call == "search_prime_name"){
			search_prime_name();
		}else if($call == "search_sub_name"){
			search_sub_name();
		}else if($call == "add_email"){
			add_email();
		}else if($call == "email_address_list"){
			email_address_list();
		}else if($call == "add_email_templates"){
			add_email_templates();
		}else if($call == "email_template_list"){
			email_template_list();
		}else if($call == "delete_email_templates"){
			delete_email_templates();
		}
		
		/* hiren */
		else if($call == "contact_list") {
            contact_list();
        }else if($call == "contact_upload"){
			contact_upload();
		}else if($call == "contact_delete"){
			contact_delete();
		}else if($call == "contact_edit"){
			contact_edit();
		}else if($call == "contact_add"){
			contact_add();
		}else if($call == "gallery_list"){
			gallery_list();
		}else if($call == "add_gallery"){
			add_gallery();
		}else if($call == "edit_gallery"){
			edit_gallery();
		}else if($call == "delete_galery"){
			delete_galery();
		}else if($call == "removeimg"){
			removeimg();
		}else if($call == "logo_banner"){
			logo_banner();
		}
		else if($call == "logo_list"){
			logo_list();
		}
		else if($call == "edit_logo_banner"){
			edit_logo_banner();
		}else if($call == "delete_logo_banner"){
			delete_logo_banner();
		}

		
		/* purvesh */
		else if($call == "add_form_page"){
			add_form_page();
		}else if($call == "form_page_delete"){
			form_page_delete();
		}else if($call == "form_page_list"){
			form_page_list();
		}else if($call == "search_form_page_list"){
			search_form_page_list();
		}else if($call == "create_form_page"){
			create_form_page();
		}else if($call == "page_lits"){
			page_lits();
		}else if($call == "page_lits_delete"){
			page_lits_delete();
		}else if($call == "create_new_form_page"){
			create_new_form_page();
		}else if($call == "create_form_page_list"){
			create_form_page_list();
		}else if($call == "interview_question"){
			interview_question();
		}else if($call == "interview_question_create"){
			interview_question_create();
		}else if($call == "interview_question_lits"){
			interview_question_lits();
		}else if($call == "interview_question_lits_delete"){
			interview_question_lits_delete();
		}else if($call == "telephone_interview_question_list"){
			telephone_interview_question_list();
		}else if($call == "interview_delete"){
			interview_delete();
		}else if($call == "user_role_designation_create"){
			user_role_designation_create();
		}else if($call == "search_role_name"){
			search_role_name();
		}else if($call == "user_role_designation_list"){
			user_role_designation_list();
		}else if($call == "delete_user_role_designation"){
			delete_user_role_designation();
		}else if($call == "get_profile"){
			get_profile();
		}else if($call == "get_call_interview_by_id"){
			get_call_interview_by_id();
		}else if($call == "interview_question_fillup"){
			interview_question_fillup();
		}
		
	}


function logo_list(){
    global $con, $per_page, $site_url;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
  
    
    $status = $_POST['status'];
    $logo_type = $_POST['logo_type'];
   
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
   // $ad_work_type = $_POST['ad_work_type'];
    //$ad_display = $_POST['ad_display'];
   
    $veer = "";
    
    if($status == ""){
        $veer .= "";
    } else {
        $veer .= "(tal_logo_status = '$f_name') and ";
    }

    if($logo_type == ""){
        $veer .= "";
    } else {
        $veer .= "(tal_logo_name = '$logo_type') and ";
    }

   
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " tal_logo_id ";
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
 
    mysqli_set_charset($con, 'utf8');
		$no = $cur_pagea;
    $spre = $con->query("select tal_logo_id,tal_logo_name,tal_logo_url,tal_logo_status FROM `tal_logo` $veer1  LIMIT $start, $per_page ");
   
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["tal_logo_status"] == 1){
				$status = "active";
			}else{
				$status = "Deactive";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="ad_usr_id[]" class="rowsf"  id="check'.$r["tal_logo_id"].'" value="'.$r["tal_logo_id"].'"></td>';
            $msg .= '<td>'.$no++.'</td>';
            $msg .= '<td>'.$r["tal_logo_name"].'</td>';     
            $msg .= '<td><img src="'.$site_url.$r["tal_logo_url"].'" height="50px" width="100px" ></img></td>';      
            $msg .= '<td>'.$status.'</td>'; 
            
           
			/*if($r["ad_display"] == 1){
                $check = '<i class="fa fa-check" aria-hidden="true" title="Show On Website"  style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;" ></i>';
            } else {
                $check = '';
            }*/
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["tal_logo_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
            $msg .= "'".$r["tal_logo_id"]."'";
            $msg .=')" class="fa fa-times" aria-hidden="true" title="Delete" style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;"></i> '.$check.'
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="13">No Data Found.</td>';
        $msg .= '</tr>';
    }       
		mysqli_set_charset($con, 'utf8');
		$query_pag_num = "SELECT COUNT(*) AS count FROM tal_logo $veer1";
		$result_pag_num = $con->query($query_pag_num);
		$row = mysqli_fetch_array($result_pag_num);
		$count = $row['count'];
		$no_of_paginations = ceil($count / $per_page);

		if($cur_page >= 7) {
			$start_loop = $cur_page - 3;
			if ($no_of_paginations > $cur_page + 3)
				$end_loop = $cur_page + 3;
			else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
				$start_loop = $no_of_paginations - 6;
				$end_loop = $no_of_paginations;
			} else {
				$end_loop = $no_of_paginations;
			}
		} else {
			$start_loop = 1;
			if ($no_of_paginations > 7)
				$end_loop = 7;
			else
				$end_loop = $no_of_paginations;
		}
		
		$msg .= "pagination_part<div class='pagination'><ul>"; 
		// FOR ENABLING THE FIRST BUTTON
		if ($first_btn && $cur_page > 1) {
			$msg .= "<li p='1' class='active'>First</li>";
		} else if ($first_btn) {
			$msg .= "<li p='1' class='inactive'>First</li>";
		} 
		// FOR ENABLING THE PREVIOUS BUTTON
		if ($previous_btn && $cur_page > 1) {
			$pre = $cur_page - 1;
			$msg .= "<li p='$pre' class='active'>Previous</li>";
		} else if ($previous_btn) {
			$msg .= "<li class='inactive'>Previous</li>";
		}
		for ($i = $start_loop; $i <= $end_loop; $i++) { 
			if ($cur_page == $i){
				$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
			} else {
				$msg .= "<li p='$i' class='active'>{$i}</li>";
			}   
		} 
		// TO ENABLE THE NEXT BUTTON
		if ($next_btn && $cur_page < $no_of_paginations) {
			$nex = $cur_page + 1;
			$msg .= "<li p='$nex' class='active'>Next</li>";
		} else if ($next_btn) {
			$msg .= "<li class='inactive'>Next</li>";
		} 
		// TO ENABLE THE END BUTTON
		if ($last_btn && $cur_page < $no_of_paginations) {
			$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
		} else if ($last_btn) {
			$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
		}
		 
		$msg .= "</ul></div>pagination_part".$count; 
		
		echo $msg;
		mysqli_close($con); 
}

	
function gallery_insert(){
	global $con;
	
	$g_id = mysqli_escape_string($con,$_POST['g_id']);
	$g_title = mysqli_escape_string($con,$_POST['g_title']);
	$g_date = date('Y-m-d', strtotime($_POST['g_date']));
	$g_project = mysqli_escape_string($con,$_POST['g_project']);
	$g_path = mysqli_escape_string($con,$_POST['g_path']);
	$g_status = mysqli_escape_string($con,$_POST['g_status']);
	  
	$qry_chk = $con->query("select g_path, g_id from gallery where g_id = '$g_id'");
	if(mysqli_num_rows($qry_chk) > 0){
		$r = mysqli_fetch_array($qry_chk);
		$path = $r['g_path'];
		$gpath = $path.''.$g_path;
		
		$ans = $con->query("update gallery set g_title = '$g_title', g_date = '$g_date', g_project = '$g_project', g_path = '$gpath',g_status = '$g_status' where  g_id = '$g_id' ");
		if($ans == 1) {
			echo 1;
		} else {
			echo 0;
		}
	} else {
		
		$ans = $con->query("insert into gallery(g_title, g_date, g_project, g_path,g_status) values('$g_title','$g_date','$g_txt','$g_path','$g_code','$g_main_img','$g_status')");
		if($ans == 1) {
			echo 1;
		} else {
			echo 0;
		}
	}
}

function removeimg(){ 
	global $con;
    $ids = $_POST['id']; 
    $path =  $_POST['path']; 
    $shabhno = $_POST['shabhno']; 
	
	$new_path = str_replace($path.'hirdon','',$shabhno);
	//$re = 0;
    $re = $con->query("update gallery set g_path = '$new_path' where g_id IN($ids) ");
    //echo "update gallery set g_path = '$new_path' where g_id IN($ids) ";
	if($re == 1){
		unlink($path);
		echo 1;
	}else{
		echo 0;
	}
}	
function gallery_list(){
	global $con, $per_page, $base_path;
	$page = $_POST['page'];
	$no = $page;
	$cur_page = $page;
	$page -= 1; 
	$previous_btn = true;
	$next_btn = true;
	$first_btn = true;
	$last_btn = true;
	$start = $page * $per_page; 
	
	$src_name = $_POST['src_name'];
	$src_fdate = $_POST['src_fdate'];
	$src_ldate = $_POST['src_ldate'];
	 

	$veer = "";
	if($src_name == ""){
		$veer .= "";
	} else {
		$veer .= "g.g_title like '%$src_name%' and ";
	} 
	
	if($src_fdate == ""){
		$veer .= "";
	} else {
		$src_fdate = date('Y-m-d',strtotime($src_fdate)); 
		if($src_ldate == ""){
			$src_ldate = date('Y-m-d'); 
			$veer .="g.g_date BETWEEN '$src_fdate' AND '$src_ldate' and ";
		} else {
			$src_ldate = date('Y-m-d',strtotime($src_ldate));
			$veer .="g.g_date BETWEEN '$src_fdate' AND '$src_ldate' and ";
		}
	} 
	
 
	$dev = substr($veer,0,-4);
	if($veer == ""){
		$veer1 = " order by g.g_id desc";
	} else {
		$veer1 = ' where '.$dev.' order by  g.g_id desc';
	}
 	
	mysqli_set_charset($con, 'utf8');
	$spre = $con->query("select g.g_id as g_id, g.g_title as g_title, g.g_date as g_date,p.proj_title as proj_title from gallery as g join project as p on p.proj_id = g.g_project $veer1 LIMIT $start, $per_page ");
	//echo "select g.g_id, g.g_title, g.g_date,p.proj_title from gallery as g join project as p on p.proj_id = g.g_project $veer1 LIMIT $start, $per_page ";
	$msg = "";
	
	if(mysqli_num_rows($spre) > 0){
		while($r = mysqli_fetch_array($spre)){
			$msg .= '<tr>'; 
			$msg .= '<td>'.$no++.' </td>'; 
			
			$msg .= '<td>'.$r["proj_title"].' </td>'; 
			$msg .= '<td>'.$r["g_title"].'</td>'; 
			$msg .= '<td>'.date('d M Y', strtotime($r["g_date"])).'</td>'; 
			$msg .= '<td> <i onclick="editbtn('.$r["g_id"].')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i>  
			<i onclick="deletedbtn('.$r["g_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 18px; float: right; cursor: pointer; margin-right: 5px;"></i>
					</td>'; 
			$msg .= '</tr>';
		}
	} else {
			$msg .= '<tr>'; 
			$msg .= '<td colspan="6">No Records Found.</td>';
			$msg .= '</tr>';
	}	
			mysqli_set_charset($con, 'utf8');
		 	$query_pag_num = "SELECT COUNT(*) AS count FROM gallery $veer1 ";
			$result_pag_num = $con->query($query_pag_num);
			$row = mysqli_fetch_array($result_pag_num);
			$count = $row['count'];
			$no_of_paginations = ceil($count / $per_page);

			if($cur_page >= 7) {
				$start_loop = $cur_page - 3;
				if ($no_of_paginations > $cur_page + 3)
					$end_loop = $cur_page + 3;
				else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
					$start_loop = $no_of_paginations - 6;
					$end_loop = $no_of_paginations;
				} else {
					$end_loop = $no_of_paginations;
				}
			} else {
				$start_loop = 1;
				if ($no_of_paginations > 7)
					$end_loop = 7;
				else
					$end_loop = $no_of_paginations;
			}
			
			$msg .= "pagination_part<div class='pagination'><ul>"; 
					// FOR ENABLING THE FIRST BUTTON
					if ($first_btn && $cur_page > 1) {
						$msg .= "<li p='1' class='active'>First</li>";
					} else if ($first_btn) {
						$msg .= "<li p='1' class='inactive'>First</li>";
					} 
					// FOR ENABLING THE PREVIOUS BUTTON
					if ($previous_btn && $cur_page > 1) {
						$pre = $cur_page - 1;
						$msg .= "<li p='$pre' class='active'>Previous</li>";
					} else if ($previous_btn) {
						$msg .= "<li class='inactive'>Previous</li>";
					}
					for ($i = $start_loop; $i <= $end_loop; $i++) { 
						if ($cur_page == $i){
							$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
						} else {
							$msg .= "<li p='$i' class='active'>{$i}</li>";
						}	
					} 
					// TO ENABLE THE NEXT BUTTON
					if ($next_btn && $cur_page < $no_of_paginations) {
						$nex = $cur_page + 1;
						$msg .= "<li p='$nex' class='active'>Next</li>";
					} else if ($next_btn) {
						$msg .= "<li class='inactive'>Next</li>";
					} 
					// TO ENABLE THE END BUTTON
					if ($last_btn && $cur_page < $no_of_paginations) {
						$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
					} else if ($last_btn) {
						$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
					}
					 
					$msg .= "</ul></div>pagination_part".$count; 
					
			echo $msg;
			mysqli_close($con);	
}



function get_profile(){
	global $con;
    $json = array();
	$basic_profile = array();
	$basic_kyc = array();
	$basic_contact_details = array();
	$basic_bank_details = array();
	$bp_id = $_POST['bp_id'];
	
	$get_uid = $con->query("select bp_user_type, bp_unique_id from basic_profile where bp_id = '$bp_id' ");
	
	$user_type = 0;
	$bp_unique_id = '';
    if(mysqli_num_rows($get_uid) > 0){
        $r = mysqli_fetch_assoc($get_uid);
		$user_type = $r['bp_user_type'];
		$bp_unique_id = $r['bp_unique_id'];
	}
	
	if($user_type != 0){
		$get_table = $con->query("select fp_table_name from create_forms as cf join create_form_page as cr on cf.cf_uid = cr.cr_cf_uid join form_page_list as fp on fp.fp_id =cr.cr_page_id where cf.cf_p_id = '$user_type' ");
		if(mysqli_num_rows($get_table) > 0){
			while($r = mysqli_fetch_assoc($get_table)){
				if($r['fp_table_name']){
					$table_name = $r['fp_table_name'];
					if($table_name == 'basic_profile'){ 
						$get_data = $con->query("select * from basic_profile where bp_unique_id = '$bp_unique_id' ");
						if(mysqli_num_rows($get_data) > 0){
							while($r = mysqli_fetch_assoc($get_data)){
								$basic_profile[] = $r;
							}
						}
					} else if($table_name == 'basic_kyc'){ 
						$get_data = $con->query("select * from basic_kyc where bk_bp_unique_id = '$bp_unique_id' ");
						if(mysqli_num_rows($get_data) > 0){
							while($r = mysqli_fetch_assoc($get_data)){
								$basic_profile[] = $r;
							}
						}
					}else if($table_name == 'basic_contact_details'){ 
						$get_data = $con->query("select * from basic_contact_details where bcd_bp_unique_id = '$bp_unique_id' ");
						if(mysqli_num_rows($get_data) > 0){
							while($r = mysqli_fetch_assoc($get_data)){
								$basic_contact_details[] = $r;
							}
						}
					}else if($table_name == 'basic_bank_details'){ 
						$get_data = $con->query("select * from basic_bank_details where bbd_bp_unique_id = '$bp_unique_id' ");
						if(mysqli_num_rows($get_data) > 0){
							while($r = mysqli_fetch_assoc($get_data)){
								$basic_bank_details[] = $r;
							}
						}
					}
				}
			}
		}
	} else {
	}
	
	
	$return = array(
				"basic_profile" => $basic_profile,
				"basic_contact_details" => $basic_contact_details,
				"basic_kyc" => $basic_kyc,
				"basic_bank_details" => $basic_bank_details
			);
	echo json_encode($return);
	
	
	
	mysqli_close($con);
}
	
function get_call_interview_by_id(){
	global $con;
    $json = array();
	$bp_unique_id = $_POST['bp_unique_id'];
	
	$get_uid = $con->query("SELECT iq_question, iq_id, if(ci_iq_answer is null,'',ci_iq_answer) as iq_answer, (case when ci_iq_answer is null then 'new_int' else 'update_int' end) as iq_type FROM `interview_main` as im join interview_question as iq on im.im_uid = iq.iq_im_uid left JOIN call_interview as ci on iq.iq_id = ci.ci_iq_id and ci.ci_user_id = '$bp_unique_id' WHERE im_p_id = 10 and im_status = 0 and iq_display = 0 order by iq_position asc");
	if(mysqli_num_rows($get_uid) > 0){
		while($r = mysqli_fetch_assoc($get_uid)){
			$json[] = $r;
		}
	}
	
	$return = array("result" => $json);
	echo json_encode($return);
	mysqli_close($con);
}
	
function interview_question_fillup(){
	global $con, $per_page;
    
	$unique_id = $_POST['unique_id'];
	$remark = $_POST['remark'];
	$status = $_POST['status'];
	$iq_id = $_POST['iq_id'];
	$qua = $_POST['qua'];
	$types = $_POST['types'];
	$ans = $_POST['ans'];

	$iq_ids = explode(',',$iq_id);
	$quas = explode(',',$qua);
	$anss = explode(',',$ans);
	$typess = explode(',',$types);
	$c = count($iq_ids);
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$date = date('Y-m-d H:i:s');
	
	$insert = '';
	$update = '';
	$updateid = '';
	for($i=0;$i<$c;$i++){
		$type = $typess[$i]; 
		if($type == 'update_int'){
			$update .= $con->query("update call_interview set ci_iq_answer = '".$anss[$i]."', ci_l_update_by = '".$user."', ci_l_update_date = '".$date."' where ci_iq_id = '".$iq_ids[$i]."' and ci_user_id = '$unique_id' ");
		} else if($type == 'new_int'){
			$insert .= "('".$unique_id."','".$iq_ids[$i]."', '".$quas[$i]."','".$anss[$i]."','".$user."','".$date."'),";
		}
	}
	
	$in_ans = 0;
	$insert = substr($insert,0,-1);
	if($insert){
		mysqli_set_charset($con, 'utf8');
		$spre = $con->query("insert into call_interview(ci_user_id, ci_iq_id, ci_iq_question, ci_iq_answer, ci_create_by, ci_create_date) values $insert ");
	}
	
	$sprea = $con->query("update basic_profile set bp_call_int_status = '$status', bp_call_int_remark = '$remark' where bp_unique_id = '$unique_id' ");
	if($sprea == 1){
		$ans = 1;
	} else {
		$ans = 0;
	}
	
	if($ans == 1){
		
		if($status == 2){
			$send_mail = 1;
			$et_id = 8;
		} else if($status == 1){
			$send_mail = 1;
			$et_id = 7;
		} else {
			$send_mail = 0;
		}
		
		if($send_mail == 1){
			$get_email = $con->query("SELECT et_subject, et_description, ea_uname, ea_pass, ea_host, ea_port, et_from_address from email_tamplate as ad join email_address as ea On ad.et_from_address = ea.ea_address where et_id = $et_id and et_status = 0 and ea_status = 0 limit 1");
			if(mysqli_num_rows($get_email) > 0){
				$ra = mysqli_fetch_assoc($get_email);
				$subject = $ra['et_subject'];
				$msg = $ra['et_description'];
				$from_address = $ra['et_from_address'];
				$ea_uname = $ra['ea_uname'];
				$ea_pass = $ra['ea_pass'];
				$ea_host = $ra['ea_host'];
				$ea_port = $ra['ea_port'];
				
				$msgs = str_replace('%user_name%',ucfirst($ngo_name),$msg);
				
				$comment = "";
				$comment .='<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
						<title>Registration</title>
						<meta name="viewport" content="width=device-width" />
						<style type="text/css">
							@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
								body[yahoo] .buttonwrapper { background-color: transparent !important; }
								body[yahoo] .button { padding: 0 !important; }
								body[yahoo] .button a { background-color: #f79f17;; padding: 15px 25px !important; }
							} 
							@media only screen and (min-device-width: 601px) {
								.content { width: 600px !important; }
								.col387 { width: 387px !important; }
							}
						</style>
				</head>
				<body bgcolor="#ffffff" style="margin: 0; padding: 0;" yahoo="fix">
					<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:100%; max-width:600px; border:1px solid #f79f17;" class="content">
						<tr>
							<td align="left" bgcolor="#f79f17" style="padding: 20px; color: #fff; font-family: Arial, sans-serif; font-size: 18px; line-height: 30px;text-align:center;">
								Touch A Life
							</td>
						</tr>
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 20px; color: #666; font-family: Arial, sans-serif; font-size: 13px; line-height: 30px; border-bottom: 1px solid #f79f17;">  
								'.$msgs.'
							</td>
						</tr>
						<tr>
							<td style="padding: 15px 10px 15px 10px;" bgcolor="#f79f17">
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">
											<a href="'.$site_url.'" style="color: #fff;text-decoration:none;" target="_blank">Touch A Life</a>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</body>
				</html>';
				$mail	= new PHPMailer();  
				$mail->SMTPDebug = 0;
				$mail->Host = $ea_host;
				$mail->Port = $ea_port;
				$mail->SMTPSecure = true;
				$mail->SMTPAuth = true;
				$mail->Username   = $ea_uname; 
				$mail->Password   = $ea_pass; 
				$mail->SetFrom($from_address, $email_Setname);
				$mail->AddReplyTo($from_address, $email_Setname); 

				$mail->Subject     = $subject;
				$mail->MsgHTML($comment);
				$mail->AddAddress('tejani.purvesh@gmail.com');
				if($mail->Send()) {
					$ans = 1;
				} else {
					$ans = 2;
				}
			} else {
				$ans = 3;
			}
			
		}
	}
	
	echo $ans;
	mysqli_close($con);

}
	
function interview_question(){
	global $con, $per_page;
    
	$idArray = $_POST['idArray'];
	$valueArray = $_POST['valueArray'];
	$im_uid = $_POST['im_uid'];

	$fields = explode(',',$idArray);
	$values = explode(',',$valueArray);
	$c = count($fields);
	
	$insert = '';
	for($i=0;$i<$c;$i++){
		$insert .= "'".$values[$i]."',";
	}
	
	$ans = 0;
	$insert = substr($insert,0,-1);
	if($insert){
		mysqli_set_charset($con, 'utf8'); 
		$spre = $con->query("insert into interview_question($idArray, iq_im_uid) values($insert, '$im_uid')");
		if($spre == 1){
			$ans = 1;
		} else {
			$ans = 0;
		}
	} else {
		$ans = 1;
	}
	echo $ans;
	mysqli_close($con);
}
	
function interview_question_create(){
	global $con, $per_page;
    
	$idArray = $_POST['idArray'];
	$valueArray = $_POST['valueArray'];
	$im_uid = $_POST['im_uid'];
	$im_id = $_POST['im_id'];

	$fields = explode(',',$idArray);
	$values = explode(',',$valueArray);
	$c = count($fields);
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$date = date('Y-m-d H:i:s');

	$insert = '';
	$update = '';
	for($i=0;$i<$c;$i++){
		$update .=  $fields[$i]." = '".$values[$i]."',";
		$insert .= "'".$values[$i]."',";
	}
	
	$ans = 0;
	$insert = substr($insert,0,-1);
	$update = substr($update,0,-1);
	
	if($im_id){
		mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update interview_main set $update , im_l_update_by = '$user', im_l_update_date = '$date' where im_id = $im_id ");
        if($spre == 1){
            $ans = 2;
        } else {
            $ans = 0;
        }
	} else {
		if($insert){
			mysqli_set_charset($con, 'utf8'); 
			$spre = $con->query("insert into interview_main($idArray, im_uid, im_create_by, im_create_date) values($insert, '$im_uid', '$user', '$date')");
			if($spre == 1){
				$ans = 1;
			} else {
				$ans = 0;
			}
		} else {
			$ans = 1;
		}
	}
	echo $ans;
	mysqli_close($con);
}
	
function user_role_designation_create(){
	global $con, $per_page;
    
	$idArray = $_POST['idArray'];
	$valueArray = $_POST['valueArray'];
	$ur_id = $_POST['ur_id'];

	$fields = explode(',',$idArray);
	$values = explode(',',$valueArray);
	$c = count($fields);
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$date = date('Y-m-d H:i:s');
	
	$chk = $values[4];

	$insert = '';
	$update = '';
	for($i=0;$i<$c;$i++){
		$update .=  $fields[$i]." = '".$values[$i]."',";
		$insert .= "'".$values[$i]."',";
	}
	
	$ans = 0;
	$insert = substr($insert,0,-1);
	$update = substr($update,0,-1);
	
	if($ur_id){
		mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update user_role set $update , ur_l_update_date = '$user', ur_l_update_by = '$date' where ur_id = $ur_id ");
        if($spre == 1){
            $ans = 2;
        } else {
            $ans = 0;
        }
	} else {
		if($insert){
			mysqli_set_charset($con, 'utf8'); 
			$qry_re = $con->query("select ur_id from user_role where ur_r_type = '$chk'");
			if(mysqli_num_rows($qry_re) > 0){
				$ans = 4;
			} else {
				$spre = $con->query("insert into user_role($idArray, ur_create_by, ur_create_date) values($insert, '$user', '$date')");
				if($spre == 1){
					$ans = 1;
				} else {
					$ans = 0;
				}
			}
		} else {
			$ans = 1;
		}
	}
	echo $ans;
	mysqli_close($con);
}
	
function create_form_page_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $ord_sort = $_POST['ord_sort'];
    $form_name = $_POST['form_name'];
    $fields = $_POST['fields'];
    $fp_m_id = $_POST['fp_m_id'];
	
    $veer = "";
    
	
    if($form_name == ""){
        $veer .= "";   
    } else {
        $veer = " p_name like '%$form_name%' and ";
    }
	
    if($fp_m_id == ""){
        $veer .= "";   
    } else {
        $veer = " cf_m_id = '$fp_m_id' and ";
    }
    
	if($fields == "" || $ord_sort == ""){
        $orderby = " cf_create_date desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
	 	
    $spre = $con->query("select p_name, cf_status, cf_id from create_forms as c join prime_category as p on c.cf_p_id = p.p_id $veer1 LIMIT $start, $per_page");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['cf_status'] == 0){
				$cf_status = 'Yes';
			} else {
				$cf_status = 'No';
			}
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';    
            $msg .= '<td>'.strtoupper($r["p_name"]).'</td>';
            $msg .= '<td>'.$cf_status.'</td>';   
            $msg .= '<td> <i onclick="editbtn(';
            $msg .= "'".$r["cf_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletedbtn('.$r["cf_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i> </td>';
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="8">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM create_forms as c join prime_category as p on c.cf_p_id = p.p_id $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}

	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
		
	echo $msg;
	mysqli_close($con); 
}
	
function user_role_designation_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    
    $ur_m_id = $_POST['ur_m_id'];
    $ur_p_id = $_POST['ur_p_id'];
    $ur_r_type = $_POST['ur_r_type'];
    $ur_type_of = $_POST['ur_type_of'];
	
    $veer = "";
    
    if($ur_r_type == ""){
        $veer .= "";   
    } else {
        $veer = " ur_r_type like '%$ur_r_type%' and ";
    }
    
    if($ur_m_id == ""){
        $veer .= "";   
    } else {
        $veer = " ur_m_id = '$ur_m_id' and ";
    }
	
	$veer = " ur_type_of = '$ur_type_of' and ";
    
	if($ur_p_id == ""){
        $veer .= "";   
    } else {
        $veer = " ur_p_id = '$ur_p_id' and ";
    }
    
	if($fields == "" || $ord_sort == ""){
        $orderby = " ur_create_by desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select ur_id, p_name, m_name, ur_r_type, ur_status from user_role as ur join master_category as m on ur.ur_m_id = m.m_id join prime_category as p on ur.ur_p_id = p.p_id $veer1 LIMIT $start, $per_page");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['ur_status'] == 0){
				$ur_status = 'Yes';
			} else {
				$ur_status = 'No';
			}
            $msg .= '<tr>';
            $msg .= '<td>'.$cur_pagea++.'</td>';
            $msg .= '<td>'.strtoupper($r["m_name"]).'</td>';
            $msg .= '<td>'.strtoupper($r["p_name"]).'</td>';
            $msg .= '<td>'.$r["ur_r_type"].'</td>';
            $msg .= '<td>'.$ur_status.'</td>';   
            $msg .= '<td> <i onclick="editbtn(';
            $msg .= "'".$r["ur_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletedbtn('.$r["ur_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i> </td>';
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="8">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM  user_role as ur join master_category as m on ur.ur_m_id = m.m_id join prime_category as p on ur.ur_p_id = p.p_id $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}

	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
		
	echo $msg;
	mysqli_close($con); 
}
	
function telephone_interview_question_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    
    $im_m_id = $_POST['im_m_id'];
    $im_p_id = $_POST['im_p_id'];
	
    $veer = "";
    
    if($im_m_id == ""){
        $veer .= "";   
    } else {
        $veer = " im_m_id = '$im_m_id' and ";
    }
    
    if($im_p_id == ""){
        $veer .= "";   
    } else {
        $veer = " im_p_id = '$im_p_id' and ";
    }
    
	if($fields == "" || $ord_sort == ""){
        $orderby = " im_create_date desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
	 	
    $spre = $con->query("select im_id, p_name, m_name, im_status, im_uid from interview_main as im join master_category as m on im.im_m_id = m.m_id join prime_category as p on im.im_p_id = p.p_id $veer1 LIMIT $start, $per_page");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['im_status'] == 0){
				$im_status = 'Yes';
			} else {
				$im_status = 'No';
			}
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';    
            $msg .= '<td>'.strtoupper($r["m_name"]).'</td>';
            $msg .= '<td>'.strtoupper($r["p_name"]).'</td>';
            $msg .= '<td>'.$im_status.'</td>';   
            $msg .= '<td> <i onclick="editbtn(';
            $msg .= "'".$r["im_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletedbtn('.$r["im_id"].','.$r["im_uid"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i> </td>';
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="8">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM interview_main as im join master_category as m on im.im_m_id = m.m_id join prime_category as p on im.im_p_id = p.p_id $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}

	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
		
	echo $msg;
	mysqli_close($con); 
}

function create_new_form_page(){
    global $con;
    $cf_cc_id = $_POST['fp_cc_id'];
    $cf_m_id = $_POST['cf_m_id'];
    $cf_uid = $_POST['cf_uid'];
    $cf_p_id = $_POST['cf_p_id'];
    $cf_f_p_id = $_POST['cf_f_p_id'];
    $cf_status = $_POST['cf_status'];
    $cf_id = $_POST['cf_id'];
 	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$date = date('Y-m-d H:i:s');
    if($fp_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update create_forms set cf_cc_id = '$cf_cc_id', cf_uid = '$cf_uid', cf_p_id = '$cf_p_id', cf_f_p_id = '$cf_f_p_id', cf_status = '$cf_status', cf_l_update_by = '$user', cf_l_update_date = '$date' where cf_id = $cf_id ");
        if($spre == 1){
            echo 2;
        } else {
            echo 0;
        }
    } else {
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("insert into create_forms(cf_cc_id, cf_m_id, cf_uid, cf_p_id, cf_f_p_id, cf_status, cf_create_by, cf_create_date) values('$cf_cc_id', '$cf_m_id', '$cf_uid', '$cf_p_id', '$cf_f_p_id', '$cf_status' , '$user', '$date')");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    }       
    mysqli_close($con); 
}

function page_lits_delete(){
    global $con;
    $ut_id = $_POST['cf_uid'];
    if($ut_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("delete from create_form_page where cr_id = $ut_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}	

function delete_user_role_designation(){
    global $con;
    $ut_id = $_POST['id'];
    if($ut_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("delete from user_role where ur_id = $ut_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}	

function interview_delete(){
    global $con;
    $id = $_POST['id'];
    $uid = $_POST['uid'];
    if($id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("DELETE interview_main , interview_question  FROM interview_main  INNER JOIN interview_question WHERE interview_main.im_uid= interview_question.iq_im_uid and interview_main.im_uid = $uid ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}	

function interview_question_lits_delete(){
    global $con;
    $ut_id = $_POST['cf_uid'];
    if($ut_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("delete from interview_question where iq_id = $ut_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}	

function page_lits(){
    global $con;
    $cf_uid = $_POST['cf_uid'];
    
	mysqli_set_charset($con, 'utf8');
	 	
    $spre = $con->query("select cr_id, cr_pre_fix, cr_cf_uid, fp_page_name, cr_page_id, cr_form_name, cr_form_code, cr_position, cr_status from create_form_page as c join form_page_list as f on c.cr_page_id = f.fp_id where cr_cf_uid = '$cf_uid' order by cr_position asc ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
		$i = 1;
        while($r = mysqli_fetch_array($spre)){
			if($r['cr_status'] == 0){
				$cr_status = 'Yes';
			} else {
				$cr_status = 'No';
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td>'.$i++.'</td>';     
			$msg .= '<td>'.$r["fp_page_name"].'</td>';   
            $msg .= '<td>'.$r["cr_form_code"].'</td>';   
            $msg .= '<td>'.$r["cr_form_name"].'</td>';   
            $msg .= '<td>'.$r["cr_pre_fix"].'</td>';   
            $msg .= '<td>'.$r["cr_position"].'</td>';   
            $msg .= '<td>'.$cr_status.'</td>';   
            $msg .= '<td><i onclick="deletedbtn('.$r["cr_id"].','.$r["cr_cf_uid"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i></td>';
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="8">No Data Found.</td>';
        $msg .= '</tr>';
    }       
 		
	echo $msg;
	mysqli_close($con); 
}

function interview_question_lits(){
    global $con;
    $cf_uid = $_POST['cf_uid'];
	mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select iq_id, iq_im_uid, iq_question, iq_position, iq_display from interview_question where iq_im_uid = '$cf_uid' order by iq_position asc ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
		$i = 1;
        while($r = mysqli_fetch_array($spre)){
			if($r['iq_display'] == 0){
				$iq_display = 'Yes';
			} else {
				$iq_display = 'No';
			}			
            $msg .= '<tr>'; 
            $msg .= '<td>'.$i++.'</td>';
			$msg .= '<td>'.$r["iq_question"].'</td>';  
            $msg .= '<td>'.$r["iq_position"].'</td>';
            $msg .= '<td>'.$iq_display.'</td>';   
            $msg .= '<td><i onclick="deletedbtn('.$r["iq_id"].','.$r["iq_im_uid"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i></td>';
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="5">No Data Found.</td>';
        $msg .= '</tr>';
    }	
	echo $msg;
	mysqli_close($con); 
}
	
function create_form_page(){
    global $con;
    $cf_f_p_id = $_POST['cf_f_p_id'];
    $cr_page_id = $_POST['cr_page_id'];
    $cr_form_code = $_POST['cr_form_code'];
    $cr_form_name = $_POST['cr_form_name'];
    $cr_position = $_POST['cr_position'];
    $cr_pre_fix = $_POST['cr_pre_fix'];
    $cf_uid = $_POST['cf_uid'];
    $cr_status = $_POST['cr_status'];
 	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$date = date('Y-m-d H:i:s');
	mysqli_set_charset($con, 'utf8');
	if($user){
		$spre = $con->query("insert into create_form_page(cr_cf_uid, cr_page_id, cr_form_code, cr_form_name, cr_pre_fix, cr_position, cr_status, cr_create_by, cr_create_date) values('$cf_uid', '$cr_page_id', '$cr_form_code', '$cr_form_name', '$cr_pre_fix', '$cr_position', '$cr_status', '$user', '$date')");
		if($spre == 1){
			echo 1;
		} else {
			echo 0;
		}
	}
    mysqli_close($con); 
}
	
function search_form_page_list(){
	global $con;
    $term = $_GET["term"];
    $fp_p_id = $_GET["cf_f_p_id"];
    if($fp_p_id){
		$query = $con->query("SELECT distinct fp_id, fp_page_name, fp_page_code FROM `form_page_list` where fp_status = 0 and fp_p_id = '$fp_p_id' and fp_page_name like '%$term%' ORDER BY fp_page_name ");
		$json=array();
		while($student=mysqli_fetch_array($query)){
			$json[]=array(
				'label'=>$student["fp_page_name"],
				'page_code'=>$student["fp_page_code"],
				'fp_id'=>$student["fp_id"]
			);
		}
		echo json_encode($json);
	}
}

function contact_upload(){

include 'Classes/PHPExcel/IOFactory.php';
//include '../config.php';
global $con;
	@$filetype = $_REQUEST['files'];
	$file_name = $_FILES['files']['name']; // Excel file name 
	$file_size=$_FILES['files']['size'];
	$file_tmp=$_FILES['files']['tmp_name'];
	$file_type=$_FILES['files']['type']; 
 
	$d = explode('.',$file_name);
			if($d[1] == 'xls' || $d[1] == 'xlsx') { 
				$file_tmp = $_FILES['files']['tmp_name'];  
				$response = move_uploaded_file($file_tmp, $file_name); 
				if($response) {
					try  {
						$objPHPExcel = PHPExcel_IOFactory::load($file_name);
					} catch(Exception $e)  {
						die('Error : Unable to load the file : "'.pathinfo($_FILES['files']['name'],PATHINFO_BASENAME).'": '.$e->getMessage());
					}

				$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true); 
				$arrayCount = count($allDataInSheet);

				$string = "INSERT INTO `quick_user`( `q_fname`, `q_mname`, `q_lname`, `q_email`, `q_gender`, `q_birthdate`, `q_city`, `q_state`, `q_country`, `q_info_source`) values";

				if($arrayCount >= 2000){
					echo '<script type="text/javascript">alert("Too Big")</script>';
				}else{
					//echo '<script type="text/javascript">alert("'.$arrayCount.'")</script>';
					//include ("../qrlib.php");
					

					for($i=2;$i<=$arrayCount;$i++) {
						
					$q_fname = trim($allDataInSheet[$i]["A"]); 
					$q_mname = trim($allDataInSheet[$i]["B"]);
					$q_lname = trim($allDataInSheet[$i]["C"]);
					$q_email = trim($allDataInSheet[$i]["D"]);
					$q_gender = trim($allDataInSheet[$i]["F"]);
					$q_birthdate = trim($allDataInSheet[$i]["E"]);
					$q_city = trim($allDataInSheet[$i]["G"]);
					$q_state = trim($allDataInSheet[$i]["H"]);
					$q_country = trim($allDataInSheet[$i]["I"]);
					$q_info_source = trim($allDataInSheet[$i]["J"]);

						
					$q_birthdate = date_format(date_create_from_format('m-d-y', $q_birthdate), 'Y-m-d');
					//$mdob = date('Y-m-d', strtotime($mdob));

						$string .= "( '$q_fname', '$q_mname', '$q_lname', '$q_email', '$q_gender', '$q_birthdate', '$q_city', '$q_state', '$q_country', '$q_info_source'),";
						}
						$string = substr($string,0,-1); 
						echo $string; 
						$re = $con->query($string);
						if($re == 1){
						echo "<script>alert('Data Successfully uploaded.')</script>";
						echo "<script>window.location = 'contact_list.php'</script>";
					}else{
						echo "<script>alert('Data Not uploaded.')</script>";
					}
					}
				}
			}else {
				echo '<script type="text/javascript">alert("Please Select Excel File.")</script>';
			}
}



function add_form_page(){
    global $con;
    $fp_id = $_POST['fp_id'];
    $fp_cc_id = $_POST['fp_cc_id'];
    $fp_m_id = $_POST['fp_m_id'];
    $fp_p_id = $_POST['fp_p_id'];
    $fp_page_name = $_POST['fp_page_name'];
    $fp_page_code = $_POST['fp_page_code'];
    $fp_status = $_POST['fp_status'];
 	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$date = date('Y-m-d H:i:s');
    if($fp_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update form_page_list set fp_cc_id = '$fp_cc_id', fp_m_id = '$fp_m_id', fp_p_id = '$fp_p_id', fp_page_name = '$fp_page_name', fp_page_code = '$fp_page_code', fp_status = '$fp_status', fp_l_update_by = '$user', fp_l_update_date = '$date' where fp_id = $fp_id ");
        if($spre == 1){
            echo 2;
        } else {
            echo 0;
        }
    } else {
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("insert into form_page_list(fp_cc_id, fp_m_id, fp_p_id, fp_page_name, fp_page_code, fp_status, fp_create_by, fp_create_date) values('$fp_cc_id', '$fp_m_id', '$fp_p_id', '$fp_page_name', '$fp_page_code', '$fp_status', '$user', '$date')");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    }       
    mysqli_close($con); 
}

function form_page_delete(){
    global $con;
    $ut_id = $_POST['id'];
    if($ut_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("delete from form_page_list where fp_id = $ut_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}

function form_page_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $fp_cc_id = $_POST['fp_cc_id'];
    $fp_m_id = $_POST['fp_m_id'];
    $fp_p_id = $_POST['fp_p_id'];
    $fp_page_name = $_POST['fp_page_name'];
    $fp_page_code = $_POST['fp_page_code'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
	
    $veer = "";
     
	if($fp_m_id == ""){
        $veer .= "";
    } else {
        $veer .= " fp_m_id = '$fp_m_id' and ";
    }
	
	if($fp_p_id == ""){
        $veer .= "";
    } else {
        $veer .= " fp_p_id = '$fp_p_id' and ";
    }
    
	if($fp_page_name == ""){
        $veer .= "";
    } else {
        $veer .= " fp_page_name like '%$fp_page_name%' and ";
    }
    
	if($fp_page_code == ""){
        $veer .= "";
    } else {
        $veer .= " fp_page_code = '$fp_page_code' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " fp_create_date desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where p_status = 0 and m_status = 0 and fp_status = 0 order by ".$orderby;
    } else {
        $veer1 = ' where p_status = 0 and m_status = 0 and fp_status = 0 and '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
	 	
    $spre = $con->query("select fp_id, cc_name, m_name, p_name, fp_page_name, fp_page_code, fp_status from form_page_list as f join create_topic as c on f.fp_cc_id = c.cc_id join master_category as m on f.fp_m_id = m.m_id join prime_category as p on f.fp_p_id = p.p_id $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['fp_status'] == 0){
				$fp_status = 'Yes';
			} else {
				$fp_status = 'No';
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="fp_id[]" class="rowsf"  id="check'.$r["fp_id"].'" value="'.$r["fp_id"].'"></td>';    
            $msg .= '<td>'.$r["fp_id"].'</td>';     
			$msg .= '<td>'.$r["m_name"].'</td>';   
            $msg .= '<td>'.$r["p_name"].'</td>';   
            $msg .= '<td>'.$r["fp_page_name"].'</td>';   
            $msg .= '<td>'.$r["fp_page_code"].'</td>';   
            $msg .= '<td>'.$fp_status.'</td>';   
            $msg .= '<td> <i onclick="editbtn(';
            $msg .= "'".$r["fp_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["fp_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="8">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM form_page_list as f join create_topic as c on f.fp_cc_id = c.cc_id join master_category as m on f.fp_m_id = m.m_id join prime_category as p on f.fp_p_id = p.p_id $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}

	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
		
	echo $msg;
	mysqli_close($con); 
}


function contact_list(){
    global $con, $per_page, $site_url;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
  
    
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $source = $_POST['source'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $m_status = $_POST['m_status'];
    $designation = $_POST['designation'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
   // $ad_work_type = $_POST['ad_work_type'];
    //$ad_display = $_POST['ad_display'];
   
    $veer = "";
    
    if($f_name == ""){
        $veer .= "";
    } else {
        $veer .= "(q_fname like '%$f_name%') and ";
    }
    if($l_name == ""){
        $veer .= "";
    } else {
        $veer .= "(q_lname like '%$l_name%') and ";
    }
	/*if($q_work_type == ""){
        $veer .= "";
    } else {
        $veer .= " q_work_type = '$q_work_type' and ";
    }*/
	
    if($state == ""){
        $veer .= "";
    } else {
        $veer .= " q_state = '$state' and ";
    }
   if($city == ""){
        $veer .= "";
    } else {
        $veer .= " q_city = '$city' and ";
    }
   if($country == ""){
        $veer .= "";
    } else {
        $veer .= " q_country = '$country' and ";
    }
   if($m_status == ""){
      //  $veer .= " q_mailing_status = '1' and ";
    } else {
        $veer .= " q_mailing_status = '$m_status' and ";
    }
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= " q_email like '%$email%' and ";
    }
    
    if($source == ""){
        $veer .= "";
    } else {
        $veer .= " q_info_source like '%$source%' and ";
    }
    if($designation == ""){
        $veer .= "";
    } else {
        $veer .= " q_designation = '$designation' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " q_id ";
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
 
    mysqli_set_charset($con, 'utf8');
		$no = $cur_pagea;
    $spre = $con->query("select `q_id`, `q_fname`, `q_mname`, `q_lname`, `q_email`, `q_gender`, `q_birthdate`, `q_info_source` ,`q_designation`,(select ur_r_type from user_role where ur_id = quick_user.q_designation) as name_Designation,(select name from countries where id = quick_user.q_country) as q_country,(select name from cities where id = quick_user.q_city) as q_city,(select name from states where id = quick_user.q_state) as q_state from quick_user $veer1  LIMIT $start, $per_page ");
    //echo "select `q_id`, `q_fname`, `q_mname`, `q_lname`, `q_email`, `q_gender`, `q_birthdate`, `q_info_source` ,`q_designation`,(select ur_r_type from user_role where ur_id = quick_user.q_designation) as name_Designation,(select name from countries where id = quick_user.q_country) as q_country,(select name from cities where id = quick_user.q_city) as q_city,(select name from states where id = quick_user.q_state) as q_state from quick_user $veer1  LIMIT $start, $per_page ";
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="ad_usr_id[]" class="rowsf"  id="check'.$r["q_id"].'" value="'.$r["q_id"].'"></td>';
            $msg .= '<td>'.$no++.'</td>';
            $msg .= '<td>'.$r["q_fname"].'</td>';     
            $msg .= '<td>'.$r["q_mname"].'</td>';      
            $msg .= '<td>'.$r["q_lname"].'</td>'; 
            $msg .= '<td>'.$r["q_email"].'</td>'; 
            $msg .= '<td>'.$r["q_gender"].'</td>'; 
            $msg .= '<td>'.$r["q_birthdate"].'</td>'; 
            $msg .= '<td>'.$r["q_city"].'</td>'; 
            $msg .= '<td>'.$r["q_state"].'</td>'; 
            $msg .= '<td>'.$r["q_country"].'</td>'; 
            $msg .= '<td>'.$r["q_info_source"].'</td>'; 
            $msg .= '<td>'.$r["name_Designation"].'</td>'; 
           
			/*if($r["ad_display"] == 1){
                $check = '<i class="fa fa-check" aria-hidden="true" title="Show On Website"  style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;" ></i>';
            } else {
                $check = '';
            }*/
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["q_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
            $msg .= "'".$r["q_id"]."'";
            $msg .=')" class="fa fa-times" aria-hidden="true" title="Delete" style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;"></i> '.$check.'
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="13">No Data Found.</td>';
        $msg .= '</tr>';
    }       
		mysqli_set_charset($con, 'utf8');
		$query_pag_num = "SELECT COUNT(*) AS count FROM quick_user $veer1";
		$result_pag_num = $con->query($query_pag_num);
		$row = mysqli_fetch_array($result_pag_num);
		$count = $row['count'];
		$no_of_paginations = ceil($count / $per_page);

		if($cur_page >= 7) {
			$start_loop = $cur_page - 3;
			if ($no_of_paginations > $cur_page + 3)
				$end_loop = $cur_page + 3;
			else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
				$start_loop = $no_of_paginations - 6;
				$end_loop = $no_of_paginations;
			} else {
				$end_loop = $no_of_paginations;
			}
		} else {
			$start_loop = 1;
			if ($no_of_paginations > 7)
				$end_loop = 7;
			else
				$end_loop = $no_of_paginations;
		}
		
		$msg .= "pagination_part<div class='pagination'><ul>"; 
		// FOR ENABLING THE FIRST BUTTON
		if ($first_btn && $cur_page > 1) {
			$msg .= "<li p='1' class='active'>First</li>";
		} else if ($first_btn) {
			$msg .= "<li p='1' class='inactive'>First</li>";
		} 
		// FOR ENABLING THE PREVIOUS BUTTON
		if ($previous_btn && $cur_page > 1) {
			$pre = $cur_page - 1;
			$msg .= "<li p='$pre' class='active'>Previous</li>";
		} else if ($previous_btn) {
			$msg .= "<li class='inactive'>Previous</li>";
		}
		for ($i = $start_loop; $i <= $end_loop; $i++) { 
			if ($cur_page == $i){
				$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
			} else {
				$msg .= "<li p='$i' class='active'>{$i}</li>";
			}   
		} 
		// TO ENABLE THE NEXT BUTTON
		if ($next_btn && $cur_page < $no_of_paginations) {
			$nex = $cur_page + 1;
			$msg .= "<li p='$nex' class='active'>Next</li>";
		} else if ($next_btn) {
			$msg .= "<li class='inactive'>Next</li>";
		} 
		// TO ENABLE THE END BUTTON
		if ($last_btn && $cur_page < $no_of_paginations) {
			$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
		} else if ($last_btn) {
			$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
		}
		 
		$msg .= "</ul></div>pagination_part".$count; 
		
		echo $msg;
		mysqli_close($con); 
}



function search_topic_name(){
	global $con;
    $term=$_GET["term"];
    $query = $con->query("SELECT distinct cc_id, cc_name FROM `create_topic` where cc_status = 0 and cc_name like '%$term%' ORDER BY cc_name ");
    $json=array();
    while($student=mysqli_fetch_array($query)){
        $json[]=array(
            'label'=>$student["cc_name"],
            'cc_id'=>$student["cc_id"]
        );
    }
    echo json_encode($json);
}
 
function search_role_name(){
	global $con;
    $term = $_GET["term"];
    $cc_id = $_GET["cc_id"];
    $type_of = $_GET["type_of"];
    if($cc_id){
		$query = $con->query("SELECT distinct ur_r_type FROM `user_role` where ur_type_of = '$type_of' and ur_p_id = $cc_id and ur_r_type like '%$term%' ORDER BY ur_r_type ");
		$json=array();
		while($student=mysqli_fetch_array($query)){
			$json[]=array(
				'label' => $student["ur_r_type"]
			);
		}
		echo json_encode($json);
	}
}
 
function search_master_name(){
	global $con;
    $term = $_GET["term"];
    $cc_id = $_GET["cc_id"];
    if($cc_id){
		$query = $con->query("SELECT distinct m_id, m_name FROM `master_category` where m_status = 0 and m_cc_id = $cc_id and m_name like '%$term%' ORDER BY m_name ");
		$json=array();
		while($student=mysqli_fetch_array($query)){
			$json[]=array(
				'label'=>$student["m_name"],
				'm_id'=>$student["m_id"]
			);
		}
		echo json_encode($json);
	}
}
 
function search_prime_name(){
	global $con;
    $term = $_GET["term"];
    $cc_id = $_GET["cc_id"];
    $m_id = $_GET["m_id"];
    if($cc_id != '' && $m_id != ''){
		$query = $con->query("SELECT distinct p_id, p_name FROM `prime_category` where p_status = 0 and p_cc_id = $cc_id and p_m_id = $m_id and p_name like '%$term%' ORDER BY p_name ");
		$json=array();
		while($student=mysqli_fetch_array($query)){
			$json[]=array(
				'label'=>$student["p_name"],
				'p_id'=>$student["p_id"]
			);
		}
		echo json_encode($json);
	}
}
 
function search_sub_name(){
	global $con;
    $term = $_GET["term"];
    $cc_id = $_GET["cc_id"];
    $m_id = $_GET["m_id"];
    $p_id = $_GET["p_id"];
    if($cc_id != '' && $m_id != ''){
		$query = $con->query("SELECT distinct s_id, s_name FROM `sub_category` where s_status = 0 and s_cc_id = $cc_id and s_m_id = $m_id and s_p_id = $p_id and s_name like '%$term%' ORDER BY s_name ");
		$json=array();
		while($student=mysqli_fetch_array($query)){
			$json[]=array(
				'label'=>$student["s_name"],
				's_id'=>$student["s_id"]
			);
		}
		echo json_encode($json);
	}
}
 
 
function login(){
    global $con;
    $u = $_POST['u'];
    $p = $_POST['p'];
    $re = $con->query("SELECT ad_id, ad_email,ad_pass,ad_profile,ad_fname,ad_lname FROM admin_user WHERE ad_email = '$u' and ad_pass = '$p' and ad_active = 0 ");
	$num = mysqli_num_rows($re);
    if(mysqli_num_rows($re) > 0){
        $r = mysqli_fetch_array($re);
        $uid  = $r['ad_email'];
        $pas  = $r['ad_pass'];
        $ad_id  = $r['ad_id'];
        $profile  = $r['ad_profile'];
        $us_name  = $r['ad_fname'].' '.$r['ad_lname'];
        if($uid == $u && $pas == $p){
            $_SESSION['uname'] = $u;
            $_SESSION['pwd'] = $p;
            $_SESSION['pro_pic'] = $profile;
            $_SESSION['u_nm'] = $us_name;
            $_SESSION['ad_email'] = $uid;
            $_SESSION['ad_id'] = $ad_id;
            echo 1;                 
        } else {
            echo 0;
        }
    } else {
        echo 2;
    }
}

function schl_nm(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select schl_nm,schl_id from school_register order by schl_nm asc");
	$msg .='<option value="">School Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['schl_id'].'" id="schl_id">'.$row['schl_nm'].'</option>';
	}
	echo $msg;
}

function ngo_nm(){
	global $con;
	
	$msg = '';
	$ngo_nm = $con->query("select ngo_id,ngo_name from ngo_register order by ngo_name asc");
		$msg .='<option value="">NGO Name</otion>';
	while($row = mysqli_fetch_array($ngo_nm)){
	
		$msg .= '<option value="'.$row['ngo_id'].'" id="ngo_id">'.$row['ngo_name'].'</option>';
	}
	echo $msg;
}

function vol_nm(){   
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select vol_fnm,vol_lnm,vol_id from volunteer_register order by vol_fnm asc");
	$msg .='<option value="">Volunteer Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$name = $row['vol_fnm'] .' '. $row['vol_lnm'];
		$msg .= '<option value="'.$row['vol_id'].'" id="vol_id">'.$name.'</option>';
	}
	echo $msg;
}

function vol_nm1(){   
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select vol_fnm,vol_lnm,vol_id from volunteer_register order by vol_fnm asc");
	$msg .='<option value="">Volunteer Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$name = $row['vol_fnm'] .' '. $row['vol_lnm'];
		$msg .= '<option value="'.$name.'" id="vol_id"></option>';
	}
	echo $msg;
}

function stud_nm(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select stud_id,stud_fnm,stud_lnm from student_register order by stud_fnm asc");
	$msg .='<option value="">Student Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_fnm'].' '.$row['stud_lnm'].'" id="stud_id"></option>';
	}
	echo $msg;
}

function email(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select vol_email from volunteer_register");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['vol_email'].'" id="vol_id">'.$row['vol_email'].'</option>';
	}
	echo $msg;
}

function email_ngo(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select ngo_email from ngo_register");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['ngo_email'].'" id="vol_id">'.$row['ngo_email'].'</option>';
	}
	echo $msg;
}

function email_school(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select admin_email from school_register");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['admin_email'].'" id="vol_id">'.$row['admin_email'].'</option>';
	}
	echo $msg;
}

function email_stdudent(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select stud_email from student_register");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_email'].'" id="vol_id">'.$row['stud_email'].'</option>';
	}
	echo $msg;
}

function email_pven(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select ven_email from vendor");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['ven_email'].'" id="vol_id">'.$row['ven_email'].'</option>';
	}
	echo $msg;
}

function email_cven(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select cven_email from vendor");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['cven_email'].'" id="vol_id">'.$row['cven_email'].'</option>';
	}
	echo $msg;
}

function ven_nm(){   
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select ven_fnm,ven_lnm,ven_id from vendor order by ven_fnm asc");
	$msg .='<option value="">Volunteer Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$name = $row['ven_fnm'] .' '. $row['ven_lnm'];
		$msg .= '<option value="'.$name.'" id="vol_id"></option>';
	}
	echo $msg;
}

function cven_nm(){   
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select cven_nm,ven_id from vendor order by cven_nm asc");
	$msg .='<option value="">Volunteer Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['cven_nm'].'" id="vol_id"></option>';
	}
	echo $msg;
}

function ven_list(){   
	global $con;
	$lang_nm = $con->query("select ven_fnm,ven_lnm,ven_id from vendor");
	$no = 1;
	$msg = "";
	while($row = mysqli_fetch_array($lang_nm)){
		
		$msg .= '<input type="checkbox" class="ngo" id="ven_'.$no++.'" name="vendor_list[]" value="'.$row['ven_id'].'" style="margin-right:5px;">'.$row['ven_fnm'].' '.$row['ven_lnm'];
		
	}
	echo $msg;
}

function user_type_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
     
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select * from user_type LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["ut_action"] == 1){
				$ut_action = 'show';
			}else{
				$ut_action = 'hide';
			}
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';     
            $msg .= '<td>'.$r["ut_title"].'</td>';     
            $msg .= '<td>'.$ut_action.'</td>';      
            
            $msg .= '<td style="text-align:center;">
            
            <i onclick="editbtn(';
            $msg .= "'".$r["ut_id"]."','".$r["ut_title"]."','".$r["ut_action"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
            $msg .= "'".$r["ut_id"]."'";
            $msg .=')" class="fa fa-trash-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i></td>';
         
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="4">No Data Found.</td>';
        $msg .= '</tr>';
    }       
        mysqli_set_charset($con, 'utf8');
        $query_pag_num = "SELECT COUNT(*) AS count FROM user_type ";
        $result_pag_num = $con->query($query_pag_num);
        $row = mysqli_fetch_array($result_pag_num);
        $count = $row['count'];
        $no_of_paginations = ceil($count / $per_page);

        if($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }
            
        $msg .= "pagination_part<div class='pagination'><ul>"; 
        // FOR ENABLING THE FIRST BUTTON
        if ($first_btn && $cur_page > 1) {
            $msg .= "<li p='1' class='active'>First</li>";
        } else if ($first_btn) {
            $msg .= "<li p='1' class='inactive'>First</li>";
        } 
        // FOR ENABLING THE PREVIOUS BUTTON
        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $msg .= "<li p='$pre' class='active'>Previous</li>";
        } else if ($previous_btn) {
            $msg .= "<li class='inactive'>Previous</li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) { 
            if ($cur_page == $i){
                $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
            } else {
                $msg .= "<li p='$i' class='active'>{$i}</li>";
            }   
        } 
        // TO ENABLE THE NEXT BUTTON
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $msg .= "<li p='$nex' class='active'>Next</li>";
        } else if ($next_btn) {
            $msg .= "<li class='inactive'>Next</li>";
        } 
        // TO ENABLE THE END BUTTON
        if ($last_btn && $cur_page < $no_of_paginations) {
            $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
        } else if ($last_btn) {
            $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
        }
         
        $msg .= "</ul></div>pagination_part".$count; 
        
        echo $msg;
        mysqli_close($con); 
}

function user_type_insert(){
    global $con;
    $ut_id = $_POST['ut_id'];
    $ut_title = strtolower($_POST['ut_title']);
    $ut_action = strtolower($_POST['ut_action']);
 
    if($ut_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update user_type set ut_title = '$ut_title', ut_action = '$ut_action' where ut_id = $ut_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("insert into user_type(ut_title, ut_action) values('$ut_title', '$ut_action')");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    }       
    mysqli_close($con); 
}

function add_email(){
    global $con;
    $id = $_POST['id'];
    $idArray = $_POST['idArray'];
    $valueArray = $_POST['valueArray'];
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$fields = explode(',',$idArray);
	$values = explode(',',$valueArray);
	$c = count($fields);
	$date = date('Y-m-d H:i:s');
	
	$update = '';
	$insert = '';
	for($i=0;$i<$c;$i++){
		$update .= $fields[$i]." = '".$values[$i]."',";
		$insert .= "'".$values[$i]."',";
	}
	
	$update = substr($update,0,-1);
	$insert = substr($insert,0,-1);
	
    if($id){
		if($update){
			mysqli_set_charset($con, 'utf8');
			$spre = $con->query("update email_address set $update, ea_l_update_by = '$user', ea_l_update_date = '$date'  where ea_id = $id ");
			if($spre == 1){
				echo 2;
			} else {
				echo 0;
			}
		} else {
			echo 0;
		}
    } else {
        if($insert){
			mysqli_set_charset($con, 'utf8');
			$spre = $con->query("insert into email_address($idArray,ea_create_by,ea_create_date) values($insert,'$user','$date')");
			if($spre == 1){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			echo 0;
		}
    }
	mysqli_close($con); 
}

function add_email_templates(){
    global $con;
    $id = $_POST['id'];
    $idArray = $_POST['idArray'];
    $valueArray = $_POST['valueArray'];
    $description = $_POST['description'];
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	$fields = explode(',',$idArray);
	$values = explode(',',$valueArray);
	$c = count($fields);
	$date = date('Y-m-d H:i:s');
	
	$update = '';
	$insert = '';
	for($i=0;$i<$c;$i++){
		$update .= $fields[$i]." = '".$values[$i]."',";
		$insert .= "'".$values[$i]."',";
	}
	
	$update = substr($update,0,-1);
	$insert = substr($insert,0,-1);
	
    if($id){
		if($update){
			mysqli_set_charset($con, 'utf8');
			$spre = $con->query("update email_tamplate set $update, et_description = '$description', et_l_update_by = '$user', et_l_update_date = '$date'  where et_id = $id ");
			if($spre == 1){
				echo 2;
			} else {
				echo 0;
			}
		} else {
			echo 0;
		}
    } else {
        if($insert){
			mysqli_set_charset($con, 'utf8');
			$spre = $con->query("insert into email_tamplate($idArray,et_description,et_create_by,et_create_date) values($insert,'$description','$user','$date')");
			if($spre == 1){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			echo 0;
		}
    }
	mysqli_close($con); 
}


function email_address_list(){
    global $con, $per_page, $site_url;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $ea_address = $_POST['ea_address'];
    $fields = $_POST['fields'];
    $ord_sort = $_POST['ord_sort'];
  	
    $veer = "";
    
    if($ea_address == ""){
        $veer .= "";
    } else {
        $veer .= "ea_address like '%$ea_address%' and ";
    }
	
	if($fields == "" || $ord_sort == ""){
        $orderby = " ea_id desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
	
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
	
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select ea_id, ea_address, ea_uname, ea_pass, ea_host, ea_port, ea_status from email_address $veer1 LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['ea_status'] == 0){
				$ea_status = 'Yes';
			} else {
				$ea_status = 'No';
			}
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';
            $msg .= '<td>'.$r["ea_address"].'</td>';
            $msg .= '<td>'.$r["ea_uname"].'</td>'; 
            $msg .= '<td>'.$r["ea_pass"].'</td>'; 
            $msg .= '<td>'.$r["ea_host"].'</td>'; 
            $msg .= '<td>'.$r["ea_port"].'</td>'; 
            $msg .= '<td>'.$ea_status.'</td>';
            $msg .= '<td style="text-align:center;">';
					$msg .='<i onclick="editbtn(';
					$msg .= "'".$r["ea_id"]."'";
					$msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
					$msg .= "'".$r["ea_id"]."'";
					$msg .=')" class="fa fa-times" aria-hidden="true" title="Closed" style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;"></i> ';
			$msg .= '</td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="8">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM email_address $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	
	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
	
	echo $msg;
	mysqli_close($con); 
}

function email_template_list(){
    global $con, $per_page, $site_url;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page;
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $et_m_name = $_POST['et_m_name'];
    $et_p_name = $_POST['et_p_name'];
    $et_s_name = $_POST['et_s_name'];
    $et_subject = $_POST['et_subject'];
	
    $fields = $_POST['fields'];
    $ord_sort = $_POST['ord_sort'];
  	
    $veer = "";
    
    if($et_m_name == ""){
        $veer .= "";
    } else {
        $veer .= "et_m_name like '%$et_m_name%' and ";
    }
	
	if($et_p_name == ""){
        $veer .= "";
    } else {
        $veer .= "et_p_name like '%$et_p_name%' and ";
    }
	
	if($et_s_name == ""){
        $veer .= "";
    } else {
        $veer .= "et_s_name like '%$et_s_name%' and ";
    }
	
	if($et_subject == ""){
        $veer .= "";
    } else {
        $veer .= "et_subject like '%$et_subject%' and ";
    }
	
	if($fields == "" || $ord_sort == ""){
        $orderby = " et_id desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
	
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
	
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select et_id, et_m_name, et_p_name, et_s_name, et_subject, et_status, et_from_address from email_tamplate $veer1 LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['et_status'] == 0){
				$et_status = 'Yes';
			} else {
				$et_status = 'No';
			}
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';
            $msg .= '<td>'.$r["et_m_name"].'</td>';
            $msg .= '<td>'.$r["et_p_name"].'</td>'; 
            $msg .= '<td>'.$r["et_s_name"].'</td>'; 
            $msg .= '<td>'.$r["et_subject"].'</td>'; 
            $msg .= '<td>'.$r["et_from_address"].'</td>'; 
            $msg .= '<td>'.$et_status.'</td>';
            $msg .= '<td style="text-align:center;">';
					$msg .='<i onclick="editbtn(';
					$msg .= "'".$r["et_id"]."'";
					$msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
					$msg .= "'".$r["et_id"]."'";
					$msg .=')" class="fa fa-times" aria-hidden="true" title="Closed" style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;"></i> ';
			$msg .= '</td>';
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="8">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM email_tamplate $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	
	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
	
	echo $msg;
	mysqli_close($con); 
}

function user_type_delete(){
    global $con;
    $ut_id = $_POST['ut_id'];
    if($ut_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("delete from user_type where ut_id = $ut_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}

function task_category_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
     
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select * from task_category LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["tc_action"] == 1){
				$tc_action = 'show';
			}else{
				$tc_action = 'hide';
			}
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';     
            $msg .= '<td>'.$r["tc_cat_name"].'</td>';     
            $msg .= '<td>'.$tc_action.'</td>';      
            
            $msg .= '<td style="text-align:center;">
            
            <i onclick="editbtn(';
            $msg .= "'".$r["tc_id"]."','".$r["tc_cat_name"]."','".$r["tc_action"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
            $msg .= "'".$r["tc_id"]."'";
            $msg .=')" class="fa fa-trash-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i></td>';
         
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="4">No Data Found.</td>';
        $msg .= '</tr>';
    }       
        mysqli_set_charset($con, 'utf8');
        $query_pag_num = "SELECT COUNT(*) AS count FROM task_category ";
        $result_pag_num = $con->query($query_pag_num);
        $row = mysqli_fetch_array($result_pag_num);
        $count = $row['count'];
        $no_of_paginations = ceil($count / $per_page);

        if($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }
            
        $msg .= "pagination_part<div class='pagination'><ul>"; 
        // FOR ENABLING THE FIRST BUTTON
        if ($first_btn && $cur_page > 1) {
            $msg .= "<li p='1' class='active'>First</li>";
        } else if ($first_btn) {
            $msg .= "<li p='1' class='inactive'>First</li>";
        } 
        // FOR ENABLING THE PREVIOUS BUTTON
        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $msg .= "<li p='$pre' class='active'>Previous</li>";
        } else if ($previous_btn) {
            $msg .= "<li class='inactive'>Previous</li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) { 
            if ($cur_page == $i){
                $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
            } else {
                $msg .= "<li p='$i' class='active'>{$i}</li>";
            }   
        } 
        // TO ENABLE THE NEXT BUTTON
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $msg .= "<li p='$nex' class='active'>Next</li>";
        } else if ($next_btn) {
            $msg .= "<li class='inactive'>Next</li>";
        } 
        // TO ENABLE THE END BUTTON
        if ($last_btn && $cur_page < $no_of_paginations) {
            $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
        } else if ($last_btn) {
            $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
        }
         
        $msg .= "</ul></div>pagination_part".$count; 
        
        echo $msg;
        mysqli_close($con); 
}

function task_category_insert(){
    global $con;
    $tc_id = $_POST['tc_id'];
    $tc_cat_name = strtolower($_POST['tc_cat_name']);
    $tc_action = strtolower($_POST['tc_action']);
 
    if($tc_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update task_category set tc_cat_name = '$tc_cat_name', tc_action = '$tc_action' where tc_id = $tc_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("insert into task_category(tc_cat_name, tc_action) values('$tc_cat_name', '$tc_action')");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    }       
    mysqli_close($con); 
}

function task_category_delete(){
    global $con;
    $tc_id = $_POST['tc_id'];
    if($tc_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("delete from task_category where tc_id = $tc_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}

function admin_category_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
     
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select * from admin_type LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["at_action"] == 1){
				$at_action = 'show';
			}else{
				$at_action = 'hide';
			}
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';     
            $msg .= '<td>'.$r["at_title"].'</td>';     
            $msg .= '<td>'.$at_action.'</td>';      
            
            $msg .= '<td style="text-align:center;">
            
            <i onclick="editbtn(';
            $msg .= "'".$r["at_id"]."','".$r["at_title"]."','".$r["at_action"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
            $msg .= "'".$r["at_id"]."'";
            $msg .=')" class="fa fa-trash-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i></td>';
         
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="4">No Data Found.</td>';
        $msg .= '</tr>';
    }       
        mysqli_set_charset($con, 'utf8');
        $query_pag_num = "SELECT COUNT(*) AS count FROM admin_type ";
        $result_pag_num = $con->query($query_pag_num);
        $row = mysqli_fetch_array($result_pag_num);
        $count = $row['count'];
        $no_of_paginations = ceil($count / $per_page);

        if($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }
            
        $msg .= "pagination_part<div class='pagination'><ul>"; 
        // FOR ENABLING THE FIRST BUTTON
        if ($first_btn && $cur_page > 1) {
            $msg .= "<li p='1' class='active'>First</li>";
        } else if ($first_btn) {
            $msg .= "<li p='1' class='inactive'>First</li>";
        } 
        // FOR ENABLING THE PREVIOUS BUTTON
        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $msg .= "<li p='$pre' class='active'>Previous</li>";
        } else if ($previous_btn) {
            $msg .= "<li class='inactive'>Previous</li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) { 
            if ($cur_page == $i){
                $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
            } else {
                $msg .= "<li p='$i' class='active'>{$i}</li>";
            }   
        } 
        // TO ENABLE THE NEXT BUTTON
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $msg .= "<li p='$nex' class='active'>Next</li>";
        } else if ($next_btn) {
            $msg .= "<li class='inactive'>Next</li>";
        } 
        // TO ENABLE THE END BUTTON
        if ($last_btn && $cur_page < $no_of_paginations) {
            $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
        } else if ($last_btn) {
            $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
        }
         
        $msg .= "</ul></div>pagination_part".$count; 
        
        echo $msg;
        mysqli_close($con); 
}

function admin_category_insert(){
    global $con;
    $at_id = $_POST['at_id'];
    $at_title = strtolower($_POST['at_title']);
    $at_action = strtolower($_POST['at_action']);
 
    if($at_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update admin_type set at_title = '$at_title', at_action = '$at_action' where at_id = $at_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("insert into admin_type(at_title, at_action) values('$at_title', '$at_action')");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    }       
    mysqli_close($con); 
}

function t_unid($prefix="",$long) {
	return uniqid($prefix,$long);
}

function save_task(){
    global $con;

	$t_report_to = isset($_SESSION['u_nm']) ? $_SESSION['u_nm'] : ''; 
	if($t_report_to != ''){
		$t_id = $_POST['t_id'];
		$t_category = $_POST['t_category'];
		$t_other_cat = trim(mysqli_escape_string($con, ($_POST['t_other_cat'])));
		$t_sub = trim(mysqli_escape_string($con, ($_POST['t_sub'])));
		$t_assign_to = trim(mysqli_escape_string($con, ($_POST['t_assign_to'])));
		$t_task_date = date('Y-m-d', strtotime($_POST['t_task_date']));
		$t_complate_date = date('Y-m-d', strtotime($_POST['t_complate_date']));
		$t_description = trim(mysqli_escape_string($con, ($_POST['t_description'])));
		$t_status = $_POST['t_status'];
		$t_attechment = $_POST['t_attechment']; 
		$t_task_id = strtoupper(t_unid("TASK_",false));
		$t_create_date = date('Y-m-d H:i:s');
		
		$users = explode(',',$t_assign_to);
		$c = count($users);
		
		$qry = '';
		$t_assign_to_name = '';
		for($i=0;$i<$c;$i++){
			$uid = $users[$i];
			$res = $con->query("select ad_fname, ad_lname, ad_email from admin_user where ad_id = '$uid' ");
			if(mysqli_num_rows($res) > 0){
				$r = mysqli_fetch_array($res);
				$tau_member_name = $r['ad_fname']." ".$r['ad_lname'];
				$tau_member_email = $r['ad_email'];		
				$qry .= "('$t_task_id','$tau_member_email','$tau_member_name','$tau_member_id'),";
				$t_assign_to_name .= $tau_member_name.", ";
			}
		}
		
		$t_report_email_id = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : ''; 
		$t_report_uid = isset($_SESSION['ad_id']) ? $_SESSION['ad_id'] : '';
		
		if($t_id){
			mysqli_set_charset($con, 'utf8');
			$spre = $con->query("update task set t_create_date = '$t_create_date', t_assign_to = '$t_assign_to', t_report_to = '$t_report_to', t_category = '$t_category', t_other_cat = '$t_other_cat', t_sub = '$t_sub', t_description = '$t_description', t_task_date = '$t_task_date', t_complate_date = '$t_complate_date', t_attechment = '$t_attechment', t_status = '$t_status', t_report_email_id = '$t_report_email_id', t_report_uid = '$t_report_uid' where t_id = $t_id ");
			if($spre == 1){
				echo 1;
			} else {
				echo 0;
			}
		} else {
			$t_assign_to_name = substr($t_assign_to_name,0,-2);
			mysqli_set_charset($con, 'utf8');
			$spre = $con->query("insert into task(t_create_date, t_assign_to, t_report_to, t_category, t_other_cat, t_sub, t_description, t_task_date, t_complate_date, t_attechment, t_status, t_report_email_id, t_report_uid, t_task_id, t_assign_to_name) values('$t_create_date', '$t_assign_to', '$t_report_to', '$t_category', '$t_other_cat', '$t_sub', '$t_description', '$t_task_date', '$t_complate_date', '$t_attechment', '$t_status', '$t_report_email_id', '$t_report_uid', '$t_task_id', '$t_assign_to_name')");
			if($spre == 1){
				if($qry){
					$qry = substr($qry,0,-1);
					$con->query("insert into task_assign_user(tau_task_id, tau_member_email, tau_member_name, tau_member_id) values $qry ");
				}
				echo 1;
			} else {
				echo 0;
			}
		}
	}
    mysqli_close($con); 
}

function remove_attach_file_task(){
    global $con;
	$t_id = $_POST['t_id'];
	$files = $_POST['files'];
	
	$re = $con->query("select t_attechment from `task` where `t_id` = '$t_id' ");
	if(mysqli_num_rows($re) > 0){
		$r = mysqli_fetch_array($re);
		$attechment = $r['t_attechment'];
		$t_attechment = str_replace($files.'partition','', $attechment);
		
		$ans = $con->query("update `task` set t_attechment = '$t_attechment' where `t_id` = '$t_id' ");
		if($ans == 1){
			echo 1;
		} else {
			echo 0;
		}	
	} else {
		echo 0;
	}
}

function task_delete(){
    global $con;
	$id = $_POST['id'];
	$ans = $con->query("update `task` set `t_action` = 1, t_status = 'Closed' where `t_id` = '$id' ");
	if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}
 
function task_list(){
    global $con, $per_page, $site_url;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $t_category = $_POST['t_category'];
    $t_sub = $_POST['t_sub'];
    $t_status = $_POST['t_status'];
    $t_assign_to = $_POST['t_assign_to'];
    $t_report_to = $_POST['t_report_to'];
    $sdate = $_POST['t_sdate'];
    $edate = $_POST['t_edate'];
	
    $veer = "";
    if($sdate == ""){
		$veer .= ''; 
	} else {
		$sdate = date('Y-m-d',strtotime($sdate)); 
		if($edate == ""){
			$edate = date('Y-m-d'); 
			$veer .=" t_task_date BETWEEN '$sdate' AND '$edate' and "; 
		} else {
			$edate = date('Y-m-d',strtotime($edate));
			$veer .=" t_task_date BETWEEN '$sdate' AND '$edate' and "; 
		}
	}
	
    if($t_category == ""){
        $veer .= "";
    } else {
        $veer .= "t_category = '$t_category' and ";
    }
    if($t_sub == ""){
        $veer .= "";
    } else {
        $veer .= "t_sub like '%$t_sub%' and ";
    }
	if($t_assign_to == 'null'){
        $veer .= "";
    } else {
        $t_assign_to = preg_replace("/[,]/", "|", $t_assign_to);
		$veer .= ' CONCAT(",", `t_assign_to`, ",") REGEXP ",('.$t_assign_to.')," and ';
    }
	if($t_report_to == 'null'){
        $veer .= "";
    } else {
		$t_report_to = preg_replace("/[,]/", "|", $t_report_to);
		$veer .= ' CONCAT(",", `t_report_uid`, ",") REGEXP ",('.$t_report_to.')," and ';
    }
    
	
	
    if($t_status == ""){
        $veer .= "";
		$veer .= " t_action = 0 and ";
    } else {
		if($t_status == "Closed"){
			$veer .= " t_action = 1 and ";
		}
        $veer .= " t_status = '$t_status' and ";
    }
    $orderby = " t_create_date desc ";
     
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
	
	mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select t_id, t_task_id, t_create_date, t_assign_to_name, t_report_to, t_category, t_sub, t_status, t_task_date, t_action, t_attechment, t_complate_date from task $veer1  LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="ad_usr_id[]" class="rowsf"  id="check'.$r["t_id"].'" value="'.$r["t_id"].'"></td>';
            $msg .= '<td>'.$cur_pagea++.'</td>';
            $msg .= '<td>'.$r["t_task_id"].'</td>';     
            $msg .= '<td>'.date('d-m-Y', strtotime($r["t_task_date"])).'</td>';      
            $msg .= '<td>'.date('d-m-Y', strtotime($r["t_complate_date"])).'</td>';      
            $msg .= '<td>'.$r["t_category"].'</td>'; 
            $msg .= '<td>'.$r["t_sub"].'</td>'; 
            $msg .= '<td>'.$r["t_assign_to_name"].'</td>'; 
            $msg .= '<td>'.$r["t_report_to"].'</td>';
            $msg .= '<td>'.$r["t_status"].'</td>';
			if($r["t_attechment"] != ''){
                $t_attechment = '<i class="fa fa-paperclip" aria-hidden="true" title="Attachment File"  style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;" ></i>';
            } else {
                $t_attechment = '';
            }
            $msg .= '<td style="text-align:center;">';
				if($r["t_status"] == 'Closed' || $r["t_status"] == 'Rejected' || $r["t_status"] == 'Completed'){
				} else {
					$msg .='<i onclick="editbtn(';
					$msg .= "'".$r["t_id"]."'";
					$msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
					$msg .= "'".$r["t_id"]."','".$r["t_task_id"]."'";
					$msg .=')" class="fa fa-times" aria-hidden="true" title="Closed" style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;"></i> ';
				}
			$msg .=	$check.' </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="11">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM task $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	
	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
	
	echo $msg;
	mysqli_close($con); 
}

function save_admin(){
    global $con;
    $ad_id = $_POST['ad_id'];
    $ad_fname = strtolower($_POST['ad_fname']);
    $ad_mname = strtolower($_POST['ad_mname']);
    $ad_lname = strtolower($_POST['ad_lname']);
    $ad_email = strtolower($_POST['ad_email']);
    $ad_pass = $_POST['ad_pass'];
    $ad_work_type = $_POST['ad_work_type'];
    $ad_type = $_POST['ad_type'];
    $ad_profile = $_POST['ad_profile'];
    $ad_sort = $_POST['ad_sort'];
    $ad_display = $_POST['ad_display'];
    $ad_gender = $_POST['ad_gender'];
    $ad_blood_group = $_POST['ad_blood_group'];
    $ad_floor = $_POST['ad_floor'];
    $ad_units = $_POST['ad_units'];
    $ad_so_name = $_POST['ad_so_name'];
    $ad_so_no = $_POST['ad_so_no'];
    $ad_add1 = $_POST['ad_add1'];
    $ad_add2 = $_POST['ad_add2'];
    $ad_other_add = $_POST['ad_other_add'];
    $ad_village = $_POST['ad_village'];
    $ad_taluka = $_POST['ad_taluka'];
    $ad_district = $_POST['ad_district'];
    $ad_country = $_POST['ad_country'];
    $ad_state = $_POST['ad_state'];
    $ad_city = $_POST['ad_city'];
    $ad_pincode = $_POST['ad_pincode'];
    $ad_con_code = $_POST['ad_con_code'];
    $ad_mobile_no = $_POST['ad_mobile_no'];	
    $ad_con_code_tel = $_POST['ad_con_code_tel'];
    $ad_area_code_tel = $_POST['ad_area_code_tel'];
    $ad_tel_no = $_POST['ad_tel_no'];
    $ad_con_code_fax = $_POST['ad_con_code_fax'];
    $ad_area_code_fax = $_POST['ad_area_code_fax'];
    $ad_fa_no = $_POST['ad_fa_no'];
    $ad_dob = date('Y-m-d', strtotime($_POST['ad_dob']));
    $ad_id_proof_no = $_POST['ad_id_proof_no'];
    $ad_front_id_proof_img = $_POST['ad_front_id_proof_img'];
    $ad_back_id_proof_img = $_POST['ad_back_id_proof_img'];
    $ad_pan_no = $_POST['ad_pan_no'];
    $ad_pan_no_img = $_POST['ad_pan_no_img'];
    $ad_edu = $_POST['ad_edu'];
    $ad_edu_img = $_POST['ad_edu_img'];
    $ad_status = $_POST['ad_status'];
    $ad_active = $_POST['ad_active'];
    $ad_join_date = date('Y-m-d', strtotime($_POST['ad_join_date']));
    $ad_leaving_date = date('Y-m-d', strtotime($_POST['ad_leaving_date']));
 
    if($ad_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("update admin_user set ad_fname = '$ad_fname', ad_mname = '$ad_mname', ad_lname = '$ad_lname', ad_email = '$ad_email', ad_pass = '$ad_pass', ad_work_type = '$ad_work_type', ad_type = '$ad_type', ad_profile = '$ad_profile', ad_sort = '$ad_sort', ad_display = '$ad_display', ad_gender = '$ad_gender', ad_blood_group = '$ad_blood_group', ad_floor = '$ad_floor', ad_units = '$ad_units', ad_so_name = '$ad_so_name', ad_so_no = '$ad_so_no', ad_add1 = '$ad_add1', ad_add2 = '$ad_add2', ad_other_add = '$ad_other_add', ad_village = '$ad_village', ad_taluka = '$ad_taluka', ad_district = '$ad_district', ad_country = '$ad_country', ad_state = '$ad_state', ad_city = '$ad_city', ad_pincode = '$ad_pincode', ad_con_code = '$ad_con_code', ad_mobile_no = '$ad_mobile_no', ad_con_code_tel = '$ad_con_code_tel', ad_area_code_tel = '$ad_area_code_tel', ad_tel_no = '$ad_tel_no', ad_con_code_fax = '$ad_con_code_fax', ad_area_code_fax = '$ad_area_code_fax', ad_fa_no = '$ad_fa_no', ad_dob = '$ad_dob', ad_id_proof_no = '$ad_id_proof_no', ad_front_id_proof_img = '$ad_front_id_proof_img', ad_back_id_proof_img = '$ad_back_id_proof_img', ad_pan_no = '$ad_pan_no', ad_pan_no_img = '$ad_pan_no_img', ad_edu = '$ad_edu', ad_edu_img = '$ad_edu_img', ad_status = '$ad_status', ad_join_date = '$ad_join_date', ad_leaving_date = '$ad_leaving_date', ad_active = '$ad_active' where ad_id = $ad_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
		mysqli_set_charset($con, 'utf8');
        $spre = $con->query("insert into admin_user(ad_fname, ad_mname, ad_lname, ad_email, ad_pass, ad_work_type, ad_type, ad_profile, ad_sort, ad_display, ad_gender, ad_blood_group, ad_floor, ad_units, ad_so_name, ad_so_no, ad_add1, ad_add2, ad_other_add, ad_village, ad_taluka, ad_district, ad_country, ad_state, ad_city, ad_pincode, ad_con_code, ad_mobile_no, ad_con_code_tel, ad_area_code_tel, ad_tel_no, ad_con_code_fax, ad_area_code_fax, ad_fa_no, ad_dob, ad_id_proof_no, ad_front_id_proof_img, ad_back_id_proof_img, ad_pan_no, ad_pan_no_img, ad_edu, ad_edu_img, ad_status, ad_join_date, ad_leaving_date, ad_active) values('$ad_fname', '$ad_mname', '$ad_lname', '$ad_email', '$ad_pass', '$ad_work_type', '$ad_type', '$ad_profile', '$ad_sort', '$ad_display', '$ad_gender', '$ad_blood_group', '$ad_floor', '$ad_units', '$ad_so_name', '$ad_so_no', '$ad_add1', '$ad_add2', '$ad_other_add', '$ad_village', '$ad_taluka', '$ad_district', '$ad_country', '$ad_state', '$ad_city', '$ad_pincode', '$ad_con_code', '$ad_mobile_no', '$ad_con_code_tel', '$ad_area_code_tel', '$ad_tel_no', '$ad_con_code_fax', '$ad_area_code_fax', '$ad_fa_no', '$ad_dob', '$ad_id_proof_no', '$ad_front_id_proof_img', '$ad_back_id_proof_img', '$ad_pan_no', '$ad_pan_no_img', '$ad_edu', '$ad_edu_img', '$ad_status', '$ad_join_date', '$ad_leaving_date', '$ad_active')");
		if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    }
    mysqli_close($con); 
}

function admin_category_delete(){
    global $con;
    $at_id = $_POST['at_id'];
    if($at_id){
        mysqli_set_charset($con, 'utf8');
        $spre = $con->query("delete from admin_type where at_id = $at_id ");
        if($spre == 1){
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }       
    mysqli_close($con); 
}

function ad_list(){
    global $con, $per_page, $site_url;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $ad_work_type = $_POST['ad_work_type'];
    $ad_display = $_POST['ad_display'];
    $ad_active = $_POST['ad_active'];
    $veer = "";
    
    if($f_name == ""){
        $veer .= "";
    } else {
        $veer .= "(ad_fname like '%$f_name%') and ";
    }
    if($l_name == ""){
        $veer .= "";
    } else {
        $veer .= "(ad_lname like '%$l_name%') and ";
    }
	if($ad_work_type == ""){
        $veer .= "";
    } else {
        $veer .= " ad_work_type = '$ad_work_type' and ";
    }
	if($ad_display == ""){
        $veer .= "";
    } else {
        $veer .= " ad_display = '$ad_display' and ";
    }
    if($ad_active == ""){
        $veer .= " ad_active = '0' and ";
    } else {
        $veer .= " ad_active = '$ad_active' and ";
    }
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= " ad_email like '%$email%' and ";
    }
    
    if($type == ""){
        $veer .= "";
    } else {
        $veer .= " ad_type = '$type' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " ad_id ";
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
 
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select ad_id, ad_fname, ad_lname, ad_email, ad_type, ad_profile, ad_active, ad_pass, ad_work_type, ad_display from admin_user $veer1  LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["ad_profile"] != ""){
				$img = $r["ad_profile"];
			}else{
				$img = "img/none.jpg";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="ad_usr_id[]" class="rowsf"  id="check'.$r["ad_id"].'" value="'.$r["ad_id"].'"></td>';
            $msg .= '<td>'.$r["ad_id"].'</td>';
            $msg .= '<td>'.$r["ad_fname"].'</td>';     
            $msg .= '<td>'.$r["ad_lname"].'</td>';      
            $msg .= '<td>'.$r["ad_email"].'</td>'; 
            $msg .= '<td>'.$r["ad_pass"].'</td>'; 
            $msg .= '<td>'.$r["ad_work_type"].'</td>'; 
            $msg .= '<td>'.$r["ad_type"].'</td>'; 
            $msg .= '<td> <img src="'.$site_url.$img.'" width="100" height="100"/></td>';
			if($r["ad_display"] == 1){
                $check = '<i class="fa fa-check" aria-hidden="true" title="Show On Website"  style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;" ></i>';
            } else {
                $check = '';
            }
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["ad_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 18px; float: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletebtn(';
            $msg .= "'".$r["ad_id"]."'";
            $msg .=')" class="fa fa-times" aria-hidden="true" title="Delete" style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;"></i> '.$check.'
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="11">No Data Found.</td>';
        $msg .= '</tr>';
    }       
		mysqli_set_charset($con, 'utf8');
		$query_pag_num = "SELECT COUNT(*) AS count FROM admin_user $veer1";
		$result_pag_num = $con->query($query_pag_num);
		$row = mysqli_fetch_array($result_pag_num);
		$count = $row['count'];
		$no_of_paginations = ceil($count / $per_page);

		if($cur_page >= 7) {
			$start_loop = $cur_page - 3;
			if ($no_of_paginations > $cur_page + 3)
				$end_loop = $cur_page + 3;
			else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
				$start_loop = $no_of_paginations - 6;
				$end_loop = $no_of_paginations;
			} else {
				$end_loop = $no_of_paginations;
			}
		} else {
			$start_loop = 1;
			if ($no_of_paginations > 7)
				$end_loop = 7;
			else
				$end_loop = $no_of_paginations;
		}
		
		$msg .= "pagination_part<div class='pagination'><ul>"; 
		// FOR ENABLING THE FIRST BUTTON
		if ($first_btn && $cur_page > 1) {
			$msg .= "<li p='1' class='active'>First</li>";
		} else if ($first_btn) {
			$msg .= "<li p='1' class='inactive'>First</li>";
		} 
		// FOR ENABLING THE PREVIOUS BUTTON
		if ($previous_btn && $cur_page > 1) {
			$pre = $cur_page - 1;
			$msg .= "<li p='$pre' class='active'>Previous</li>";
		} else if ($previous_btn) {
			$msg .= "<li class='inactive'>Previous</li>";
		}
		for ($i = $start_loop; $i <= $end_loop; $i++) { 
			if ($cur_page == $i){
				$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
			} else {
				$msg .= "<li p='$i' class='active'>{$i}</li>";
			}   
		} 
		// TO ENABLE THE NEXT BUTTON
		if ($next_btn && $cur_page < $no_of_paginations) {
			$nex = $cur_page + 1;
			$msg .= "<li p='$nex' class='active'>Next</li>";
		} else if ($next_btn) {
			$msg .= "<li class='inactive'>Next</li>";
		} 
		// TO ENABLE THE END BUTTON
		if ($last_btn && $cur_page < $no_of_paginations) {
			$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
		} else if ($last_btn) {
			$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
		}
		 
		$msg .= "</ul></div>pagination_part".$count; 
		
		echo $msg;
		mysqli_close($con); 
}

function ad_delete(){
    global $con;
	$id = $_POST['id'];
	$ans = $con->query("update `admin_user` set `ad_active` = 1 where `ad_id` = '$id' ");
	if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function contact_delete(){
    global $con;
	$id = $_POST['id'];
	$ans = $con->query("update `quick_user` set `status` = 0 where `q_id` = '$id' ");
	if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}


function ngo_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;   
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    
    $ngnm = $_POST['ngnm'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($ngnm == ""){
        $veer .= "";
    } else {
        $veer .= "(ngo_id like '%$ngnm%') and ";
    }
    
    if($mno == ""){
        $veer .= "";
    } else {
        $veer .= "(ngo_mobile like '%$mno%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(ngo_email like '%$email%') and ";
    }
	
	if($status == ""){
        $veer .= "";
    } else {
		if($status == "Unapprove"){
			$st = "0";
			$veer .= "(ngo_status like '%$st%') and ";
		}else{
			$st = "1";
			$veer .= "(ngo_status like '%$st%') and ";
		}
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " bp_create_date desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where bp_user_type = 10 order by ".$orderby;
    } else {
        $veer1 = " where bp_user_type = 10  ".$dev." order by ".$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select bp_id, bp_tal_id, bp_crop_name, bp_crop_mobile_no, bp_crop_email, bp_tal_pass, bp_create_date, bp_status from basic_profile $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			
            $msg .= '<tr>'; 
            $msg .= '<td>'.$cur_pagea++.'</td>';
			$msg .= '<td>'.$r["bp_tal_id"].'</td>';  
            $msg .= '<td onclick="call_dash('.$r['bp_id'].');" style="cursor:pointer;">'.$r["bp_crop_name"].'</td>';
            $msg .= '<td>'.$r["bp_crop_mobile_no"].'</td>'; 
            $msg .= '<td>'.$r["bp_crop_email"].'</td>'; 
            $msg .= '<td>'.$r["bp_tal_pass"].'</td>'; 
            $msg .= '<td>'.date("d-m-Y", strtotime($r["bp_create_date"])).'</td>'; 
			if($r["bp_status"] == 0){
                $msg .= '<td>Pending</td>';
            } else if($r["bp_status"] == 1){
                $msg .= '<td>Block</td>';
            } else if($r["bp_status"] == 2){
                $msg .= '<td>Approve</td>';
            } else if($r["bp_status"] == 3){
                $msg .= '<td>Rejected</td>';
            } else if($r["bp_status"] == 4){
                $msg .= '<td>Waiting</td>';
            } 
            $msg .= '<td style="text-align:center;"><i onclick="editbtn(';
            $msg .= "'".$r["bp_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i></td>'; 
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM basic_profile $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_ngo(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `ngo_register` set `ngo_status` = '$status' where `ngo_id` = '$id' ");
		//echo "update `ngo_register` set `ngo_status` = '$status' where `ngo_id` = '$id' ";
		
    if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function school_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $sclnm = $_POST['sclnm'];
    $ng_nm = $_POST['ng_nm'];
    $email = $_POST['email'];
    $vl_nm = $_POST['vl_nm'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
	
	if($ng_nm != ""){
		$ngo_id = $con->query("select ngo_id from ngo_register where ngo_id = '$ng_nm'");
		$ngo = mysqli_fetch_array($ngo_id);
		$id = $ngo['ngo_id'];
	}else{
		$id = "";
	}
	
	$vol = $con->query("select vol_id from volunteer_register where vol_id = '$vl_nm'");
	$v_id = mysqli_fetch_array($vol);
	$vlid = $v_id['vol_id'];
    
   if($sclnm == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_id = '$sclnm') and ";
    }
    
    if($ng_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_ngo = '$id') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_email like '%$email%') and ";
    }
	
	if($vl_nm == ""){
        $veer .= "";
    } else {
		$veer .= "(schl_volun like '%$vlid%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "schl_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select schl_id,schl_uid,admin_fnm,schl_nm,schl_add1,schl_taluka,schl_pwd,schl_tele_no,schl_district,schl_pin,schl_state,schl_village,schl_volun,admin_surnm,admin_email,schl_ngo,admin_mob,schl_no_stud from school_register $veer1  LIMIT $start, $per_page ");

    $msg = "";
	$no = 1;
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["schl_tele_no"] != ""){
				$a_code =  $r["schl_tele_no"];
				$molist = explode("-", $a_code);
			}else{
				$molist[1] = "";
				$molist[2] = "";
			}
			
			$st_id = $r['schl_state'];
			$st_nm = $con->query("select name from states where id = $st_id");
				while($sr = mysqli_fetch_array($st_nm)){
			if($r["schl_ngo"] != ""){
				$ng_nm = $r["schl_ngo"];
				$midn = $con->query("select ngo_name from ngo_register where ngo_id = $ng_nm");
				$mr = mysqli_fetch_array($midn);
				$ng_id = $mr["ngo_name"];
			}else{
				$ng_id = "";
			}
			if($r["schl_volun"] != ""){
				$vol_id = $r['schl_volun'];
				$vq = $con->query("select vol_fnm,vol_lnm from volunteer_register where vol_id = $vol_id");
				$vr = mysqli_fetch_array($vq);
				$vlnm = $vr["vol_fnm"].' '.$vr["vol_fnm"];
			}else{
				$vlnm = "";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["schl_id"].'" value="'.$r["schl_id"].'"></td>';    
            $msg .= '<td>'.$r['schl_uid'].'</td>';       
            $msg .= '<td style="width:12%">'.$vlnm.'</td>';     
            $msg .= '<td onclick="call_dash('.$r['schl_id'].');" style="width:12%">'.$r["schl_nm"].'</td>';     
            $msg .= '<td style="width:12%">'.$ng_id.'</td>';     
            $msg .= '<td style="width:12%">'.$r["schl_add1"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_village"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_taluka"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_district"].'</td>';      
            $msg .= '<td onclick="call_dash('.$r['schl_id'].');" style="width:12%">'.$sr["name"].'</td>'; 
			$msg .= '<td style="width:12%">'.$r["schl_pin"].'</td>';			
            $msg .= '<td style="width:12%">'.$r["schl_no_stud"].'</td>';            
            $msg .= '<td style="width:12%">'.$molist[1].'</td>';      
            $msg .= '<td style="width:12%">'.$molist[2].'</td>';      
            $msg .= '<td onclick="call_dash('.$r['schl_id'].');" style="width:12%">'.$r["admin_fnm"].' '.$r["admin_surnm"].'</td>';        
            $msg .= '<td onclick="call_dash('.$r['schl_id'].');" style="width:12%">'.$r["admin_mob"].'</td>';        
            $msg .= '<td onclick="call_dash('.$r['schl_id'].');" style="width:12%">'.$r["admin_email"].'</td>';    
            $msg .= '<td style="width:12%">'.$r["schl_pwd"].'</td>';    
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["schl_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
				}
        }
    }else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM school_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_school(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `school_register` set `schl_status` = '$status' where `schl_id` = '$id' ");
		//echo "update `ngo_register` set `ngo_status` = '$status' where `ngo_id` = '$id' ";
		
    if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function sudent_list(){
    global $downl,$con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $studnm = $_POST['studnm'];
    $ng_nm = $_POST['ng_nm'];
    $email = $_POST['email'];
    $vol_nm = $_POST['vol_nm'];
    $scl_nm = $_POST['scl_nm'];
    $ord_sort = $_POST['ord_sort'];
    $sel_class = $_POST['sel_class'];
    $stud_medium = $_POST['stud_medium'];
    $fields = $_POST['fields'];
    $veer = "";
	
	$vol = $con->query("select vol_id from volunteer_register where vol_id = '$vol_nm'");
	$v_id = mysqli_fetch_array($vol);
	$id = $v_id['vol_id'];
	
	$ngo = $con->query("select ngo_id from ngo_register where ngo_id = '$ng_nm'");
	$nr = mysqli_fetch_array($ngo);
	$nid = $nr['ngo_id'];
    
	if($studnm == ""){
        $veer .= "";
    } else {
        $veer .= "(CONCAT(`stud_fnm`, ' ', `stud_lnm`) like '%$studnm%') and ";
    }
    
    if($vol_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(vol_add_ref like '%$id%') and ";
    }
	
	if($scl_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_name = '$scl_nm') and ";
    }
    if($stud_medium == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_midium = '$stud_medium') and ";
    }
    if($sel_class == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_class = '$sel_class') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_email like '%$email%') and ";
    }
	
	if($ng_nm == ""){
        $veer .= "";
    } else {
		$veer .= "(ngo_add_ref like '%$nid%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "stud_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select stud_id,stud_fnm,stud_uid,stud_class,stud_lnm,ngo_add_ref,vol_add_ref,stud_midium,stud_email,schl_name,stud_pwd,stud_contact,stud_pic,stud_status from student_register $veer1  LIMIT $start, $per_page ");
	$no = 1;
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["stud_contact"] != ""){
				$str =  $r["stud_contact"];
			}else{
				$str = "";
			}
			
			$scl_id =  $r["schl_name"];
			$scl = $con->query("select schl_nm from school_register where schl_id = $scl_id");
			$scr = mysqli_fetch_array($scl);
			
			if($r['stud_midium'] != ""){
				$md_nm = $r['stud_midium'];
				$mdnm = $con->query("select medium_name from medium where medium_id = $md_nm");
				$mr = mysqli_fetch_array($mdnm);
				$mnm = $mr['medium_name'];
			}else{
				$mnm = "";
			}
			
			if($r['ngo_add_ref'] != ""){
				$ng_id = $r['ngo_add_ref'];
				$ngo = $con->query("select ngo_name from ngo_register where ngo_id = $ng_id");
				$nr = mysqli_fetch_array($ngo);
				$ngnm = $nr['ngo_name'];
			}else{
				$ngnm = "";
			}
			
			if($r['vol_add_ref'] != ""){
				$vl_id = $r['vol_add_ref'];
				$volun = $con->query("select vol_fnm,vol_lnm from volunteer_register where vol_id = $vl_id");
				$vr = mysqli_fetch_array($volun);
				$vlnm = $vr['vol_fnm'].' '.$vr['vol_lnm'];
			}else{
				$vlnm = "";
			}
			
			if($r['stud_class'] != ""){
				$cl_id = $r['stud_class'];
				$class = $con->query("select cl_name from class where cl_id = $cl_id");
				$cr = mysqli_fetch_array($class);
				$clnm = $cr['cl_name'];
			}else{
				$clnm = "";
			}
			if($r["stud_pic"] != ""){
				$img = $r["stud_pic"];
			}else{
				$img = "img/none.jpg";
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["stud_id"].'" value="'.$r["stud_id"].'"></td>';    
            $msg .= '<td>'.$r['stud_uid'].'</td>';          
            $msg .= '<td onclick="call_dash('.$r['stud_id'].');">'.$r["stud_fnm"].' '.$r['stud_lnm'].'</td>';  
			$msg .= '<td onclick="call_dash('.$r['stud_id'].');">'.$scr['schl_nm'].'</td>';			
			$msg .= '<td>'.$ngnm.'</td>';			
			$msg .= '<td>'.$vlnm.'</td>';			
			$msg .= '<td onclick="call_dash('.$r['stud_id'].');">'.$mnm.'</td>';			
            $msg .= '<td onclick="call_dash('.$r['stud_id'].');">'.$clnm.'</td>';      
            $msg .= '<td onclick="call_dash('.$r['stud_id'].');">'.$r["stud_email"].'</td>'; 
            $msg .= '<td>'.$r["stud_pwd"].'</td>'; 
            $msg .= '<td>'.$str.'</td>'; 
			$msg .= '<td><img src="../'.$img.'" height="100" width="100"/></td>'; 
			if($r["stud_status"] == 1){
                $msg .= '<td> Approve </td>';
            }
            else{
                $msg .= '<td>Unapprove</td>';
            }
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["stud_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM student_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_student(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `student_register` set `stud_status` = '$status' where `stud_id` = '$id' ");
		//echo "update `ngo_register` set `ngo_status` = '$status' where `ngo_id` = '$id' ";
		
    if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function volun_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $vlnm = $_POST['vlnm'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $ng_nm = $_POST['ng_nm'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
	
	$ngo = $con->query("select ngo_id from ngo_register where ngo_id = '$ng_nm'");
	$nr = mysqli_fetch_array($ngo);
	$id = $nr['ngo_id'];
	
	/* $vol = $con->query("select vol_id from volunteer_register where vol_id = '$vlnm'");
	$vr = mysqli_fetch_array($vol);
	$vid = $vr['vol_id']; */
    
	if($vlnm == ""){
        $veer .= "";
    } else {
        $veer .= "(CONCAT(`vol_fnm`, ' ', `vol_lnm`) like '%$vlnm%') and ";
    }
    
    if($mno == ""){
        $veer .= "";
    } else {
        $veer .= "(vol_contact like '%$mno%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(vol_email like '%$email%') and ";
    }
	
	if($ng_nm == ""){
        $veer .= "";
    } else {
		$veer .= "(vol_conn_ngo like '%$id%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " vol_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select vol_uid,vol_id,vol_lnm,vol_fnm,vol_conn_ngo,vol_contact,vol_email,vol_pwd,vol_dob,vol_pic,vol_status from volunteer_register $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["vol_conn_ngo"] != ""){
				$ng_nm = $r["vol_conn_ngo"];
				$midn = $con->query("select ngo_name from ngo_register where ngo_id = $ng_nm");
				$nr = mysqli_fetch_array($midn);
				$ng_nm = $nr["ngo_name"];
			}else{
				$ng_nm = "";
			}
			if($r["vol_pic"] != ""){
				$img = $r["vol_pic"];
			}else{
				$img = "img/none.jpg";
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="vol_id[]" class="rowsf"  id="check'.$r["vol_id"].'" value="'.$r["vol_id"].'"></td>';    
            $msg .= '<td>'.$r["vol_uid"].'</td>';     
            $msg .= '<td onclick="call_dash('.$r['vol_id'].');">'.$r["vol_fnm"].' '.$r["vol_lnm"].'</td>';     
            $msg .= '<td>'.$ng_nm.'</td>';     
            $msg .= '<td onclick="call_dash('.$r['vol_id'].');">'.$r["vol_contact"].'</td>';      
            $msg .= '<td onclick="call_dash('.$r['vol_id'].');">'.$r["vol_email"].'</td>'; 
            $msg .= '<td>'.$r["vol_pwd"].'</td>'; 
            $msg .= '<td onclick="call_dash('.$r['vol_id'].');">'.$r["vol_dob"].'</td>'; 
            $msg .= '<td><img src="../'.$img.'" height="100" width="100"/></td>'; 
			if($r["vol_status"] == 1){
                $msg .= '<td> Approve </td>';
            }
            else{
                $msg .= '<td>Unapprove</td>';
            }
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["vol_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM volunteer_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_volun(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `volunteer_register` set `vol_status` = '$status' where `vol_id` = '$id' ");
		//echo "update `ngo_register` set `ngo_status` = '$status' where `ngo_id` = '$id' ";
		
    if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function pdon_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $dnnm = $_POST['dnnm'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($dnnm == ""){
        $veer .= "";
    } else {
        $veer .= "(don_fnm like '%$dnnm%') and ";
    }
    
    if($mno == ""){
        $veer .= "";
    } else {
        $veer .= "(don_mono like '%$mno%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(don_email like '%$email%') and ";
    }
	
	if($status == ""){
        $veer .= "";
    } else {
		if($status == "Unapprove"){
			$st = "0";
			$veer .= "(don_status like '%$st%') and ";
		}else{
			$st = "1";
			$veer .= "(don_status like '%$st%') and ";
		}
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " don_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where don_type = 'p' order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' and don_type = "p" order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select don_id,don_fnm,don_mono,don_email,don_pwd,don_dob,don_pic,don_status from donor $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			$str =  $r["don_mono"];
			$molist = explode("-", $str);
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="don_id[]" class="rowsf"  id="check'.$r["don_id"].'" value="'.$r["don_id"].'"></td>';    
            $msg .= '<td>'.$r["don_id"].'</td>';     
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$r["don_fnm"].'</td>';     
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$molist[0].$molist[1].'</td>';      
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$r["don_email"].'</td>'; 
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$r["don_pwd"].'</td>'; 
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$r["don_dob"].'</td>'; 
            $msg .= '<td><img src="../'.$r["don_pic"].'" height="100" width="100"/></td>'; 
			if($r["don_status"] == 1){
                $msg .= '<td> Approve </td>';
            }
            else{
                $msg .= '<td>Unapprove</td>';
            }
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["don_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM donor $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_pdonor(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `donor` set `don_status` = '$status' where `don_id` = '$id' ");
		
    if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function cdon_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $dnnm = $_POST['dnnm'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($dnnm == ""){
        $veer .= "";
    } else {
        $veer .= "(cdon_nm like '%$dnnm%') and ";
    }
    
    if($mno == ""){
        $veer .= "";
    } else {
        $veer .= "(cdon_mono like '%$mno%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(cdon_email like '%$email%') and ";
    }
	
	if($status == ""){
        $veer .= "";
    } else {
		if($status == "Unapprove"){
			$st = "0";
			$veer .= "(cdon_status like '%$st%') and ";
		}else{
			$st = "1";
			$veer .= "(cdon_status like '%$st%') and ";
		}
    }
	
    if($fields == "" || $ord_sort == ""){
        $orderby = "don_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where don_type = 'c' order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' and don_type = "c" order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select don_id,cdon_nm,cdon_mono,cdon_email,don_pwd,cdon_ngowebsite,cdon_profile,cdon_pic,don_status from donor $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["cdon_mono"] != ""){
				$str =  $r["cdon_mono"];
				$molist = explode("-", $str);
				$mobileno = $molist[0].$molist[1];
			}else{
				$mobileno = "";
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="don_id[]" class="rowsf"  id="check'.$r["don_id"].'" value="'.$r["don_id"].'"></td>';    
            $msg .= '<td>'.$r["don_id"].'</td>';     
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$r["cdon_nm"].'</td>';     
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$mobileno.'</td>';      
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$r["cdon_email"].'</td>'; 
            $msg .= '<td>'.$r["don_pwd"].'</td>'; 
            $msg .= '<td onclick="call_dash('.$r['don_id'].');">'.$r["cdon_ngowebsite"].'</td>'; 
            $msg .= '<td><img src="../'.$r["cdon_pic"].'" height="100" width="100"/></td>'; 
			if($r["don_status"] == 1){
                $msg .= '<td> Approve </td>';
            }
            else{
                $msg .= '<td>Unapprove</td>';
            }
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["don_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM donor $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_cdonor(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `donor` set `don_status` = '$status' where `don_id` = '$id' ");
		
    if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function cven_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $dnnm = $_POST['dnnm'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($dnnm == ""){
        $veer .= "";
    } else {
        $veer .= "(cven_nm like '%$dnnm%') and ";
    }
    
    if($mno == ""){
        $veer .= "";
    } else {
        $veer .= "(cven_mono like '%$mno%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(cven_email like '%$email%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " ven_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
	if($veer == ""){
		$veer1 = ' where ven_type = "c" order by '.$orderby;
    } else {
		$veer1 = ' where ' .$dev. ' and ven_type = "c" order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select ven_uid,cven_nm,ven_id,cven_mono,cven_email,ven_pwd,cven_profile,cven_logo,ven_status from vendor $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			$str =  $r["cven_mono"];
			$molist = explode("-", $str);
			
			if($r["cven_logo"] != ""){
				$img = $r["cven_logo"];
			}else{
				$img = "img/none.jpg";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="ven_id[]" class="rowsf"  id="check'.$r["ven_id"].'" value="'.$r["ven_id"].'"></td>';    
            $msg .= '<td>'.$r["ven_uid"].'</td>';     
            $msg .= '<td>'.$r["cven_nm"].'</td>';     
            $msg .= '<td>'.$molist[0].$molist[1].'</td>';      
            $msg .= '<td>'.$r["cven_email"].'</td>'; 
            $msg .= '<td>'.$r["ven_pwd"].'</td>'; 
            $msg .= '<td>'.$r["cven_profile"].'</td>'; 
            $msg .= '<td><img src="../'.$img.'" height="100" width="100"/></td>'; 
			if($r["cven_status"] == 1){
                $msg .= '<td> Approve </td>';
            }
            else{
                $msg .= '<td>Unapprove</td>';
            }
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["ven_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM vendor $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_cvendor(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `vendor` set `cven_status` = '$status' where `ven_id` = '$id' ");
		//echo "update `ngo_register` set `ngo_status` = '$status' where `ngo_id` = '$id' ";
		
    if($ans == 1) {
       echo 1;
    } else {
       echo 0;
    }
}

function pven_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $vnnm = $_POST['vnnm'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($vnnm == ""){
        $veer .= "";
    } else {
        $veer .= "(CONCAT(`ven_fnm`, ' ', `ven_lnm`) like '%$vnnm%') and ";
    }
    
    if($mno == ""){
        $veer .= "";
    } else {
        $veer .= "(ven_mono like '%$mno%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(ven_email like '%$email%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " ven_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
		$veer1 = ' where ven_type = "p" order by '.$orderby;
    } else {
		$veer1 = ' where ' .$dev. ' and ven_type = "p" order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select ven_uid,ven_id,ven_fnm,ven_lnm,ven_mono,ven_email,ven_pwd,ven_dob,ven_pic,ven_status from vendor $veer1  LIMIT $start, $per_page ");

    $msg = "";
	$molist = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			
			if($r["ven_pic"] != ""){
				$img = $r["ven_pic"];
			}else{
				$img = "img/none.jpg";
			}
			
			if($r["ven_mono"] != ""){
				$str =  $r["ven_mono"];
				$molist = explode("-", $str);
				$mono = $molist[0].$molist[1];
			}else{
				$mono = "";
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="ven_id[]" class="rowsf"  id="check'.$r["ven_id"].'" value="'.$r["ven_id"].'"></td>';    
            $msg .= '<td>'.$r["ven_uid"].'</td>';     
            $msg .= '<td onclick="call_dash('.$r['ven_id'].');">'.$r["ven_fnm"].' '.$r["ven_lnm"].'</td>';     
            $msg .= '<td>'.$mono.'</td>';      
            $msg .= '<td onclick="call_dash('.$r['ven_id'].');">'.$r["ven_email"].'</td>'; 
            $msg .= '<td>'.$r["ven_pwd"].'</td>'; 
            $msg .= '<td onclick="call_dash('.$r['ven_id'].');">'.$r["ven_dob"].'</td>'; 
            $msg .= '<td><img src="../'.$img.'" height="100" width="100"/></td>'; 
			if($r["ven_status"] == 1){
                $msg .= '<td> Approve </td>';
            }
            else{
                $msg .= '<td>Unapprove</td>';
            }
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["ven_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM vendor $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}
function edit_pvendor(){
    global $con;

	$status = $_POST['status'];
	$id = $_POST['id'];
		
		$ans = $con->query("update `vendor` set `ven_status` = '$status' where `ven_id` = '$id' ");
		//echo "update `ngo_register` set `ngo_status` = '$status' where `ngo_id` = '$id' ";
		
    if($ans == 1) {
       echo 'window.location = "pvendor_list.php"';
    } else {
       echo 0;
    }
}

function master_nm(){
	global $con;
	$msg = '';
	$con_nm = $con->query("select mc_id,mc_name from m_catagory");
	$msg .= '<option>Select Master Category</option>';
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['mc_id'].'" id="mc_id">'.$r['mc_name'].'</option>';
	}
	echo $msg;
}

function prime_nm(){
	global $con;
	$msg = '';
	$con_nm = $con->query("select pc_id,pc_name from p_catagory");
	$msg .= '<option>Select Prime Category</option>';
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['pc_id'].'" id="pc_id">'.$r['pc_name'].'</option>';
	}
	echo $msg;
}

function prime_name(){
	global $con;
	$id = $_POST['id'];
	$msg = '';
	$con_nm = $con->query("select pc_id,pc_name from p_catagory where mc_id = $id");
	$msg .= '<option>Select Prime Category</option>';
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['pc_id'].'" id="pc_id">'.$r['pc_name'].'</option>';
	}
	echo $msg;
}

function sub_nm(){
	global $con;
	$msg = '';
	$con_nm = $con->query("select sc_id,sc_name from s_catagory");
	$msg .= '<option>Select Sub Category</option>';
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['sc_id'].'" id="sc_id">'.$r['sc_name'].'</option>';
	}
	echo $msg;
}

function sub_name(){
	global $con;
	$id = $_POST['id'];
	$msg = '';
	$con_nm = $con->query("select sc_id,sc_name from s_catagory where pc_id = $id");
	$msg .= '<option>Select Sub Category</option>';
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['sc_id'].'" id="sc_id">'.$r['sc_name'].'</option>';
	}
	echo $msg;
}

function board_nm(){
	global $con;
	$msg = '';
	$brd_nm = $con->query("select board_id,board_short_name from Board");
	while($r = mysqli_fetch_array($brd_nm)){
		$msg .= '<option value="'.$r['board_id'].'" id="board_id">'.$r['board_short_name'].'</option>';
	}
	echo $msg;
}

function midium_nm(){
	global $con;
	$msg = '';
	$con_nm = $con->query("select medium_id,medium_name from medium");
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['medium_id'].'" id="medium_id">'.$r['medium_name'].'</option>';
	}
	echo $msg;
}

function class_nm(){
	global $con;
	$msg = '';
	$con_nm = $con->query("select cl_id,cl_name from class");
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['cl_id'].'" id="cl_id">'.$r['cl_name'].'</option>';
	}
	echo $msg;
}

function projs(){   
	global $con;
	
	$msg = '';
	$lang_nm = $con->query("select proj_id,proj_title from project");
	$no = 1;
	while($row = mysqli_fetch_array($lang_nm)){
		$msg .= '<input type="checkbox" class="project" id="language_'.$row['proj_id'].'" name="check_list[]" value="'.$row['proj_id'].'" style="margin-right:5px;margin-left:15px;">'.$row['proj_title'];
	}
	echo $msg;
}

function add_master(){
	global $con;
	
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	if($user){	
		$cc_id = $_POST['cc_id'];
		$m_id = $_POST['m_id'];
		$cc_name = $_POST['cc_name'];
		$m_name = $_POST['m_name'];
		$m_status = $_POST['m_status'];
		$date = date('Y-m-d H:i:s');
		
		if($m_id){
			$qry = $con->query("update `master_category` set m_name = '$m_name', m_cc_id = '$cc_id', m_cc_name = '$cc_name', m_status = '$m_status', m_l_update_by = '$user', m_l_update_date = '$date' where m_id = '$m_id' ");
			if($qry == 1) {
				echo 2;
			}else{
				echo 0;
			}
		} else {
			$qry = $con->query("INSERT INTO `master_category`(m_name, m_cc_id, m_status, m_create_by, m_create_date, m_cc_name) VALUES ('$m_name', '$cc_id', '$m_status', '$user', '$date', '$cc_name')");
			if($qry == 1) {
				echo 1;
			}else{
				echo 0;
			}
		}
	}
}

function add_topic(){
	global $con;
	
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	if($user){	
		$cc_id = $_POST['cc_id'];
		$cc_name = $_POST['cc_name'];
		$cc_status = $_POST['cc_status'];
		$date = date('Y-m-d H:i:s');
		
		if($cc_id){
			$qry = $con->query("update `create_topic` set cc_name = '$cc_name', cc_status = '$cc_status', cc_l_update_by = '$user', cc_l_update_date = '$date' where cc_id = '$cc_id' ");
			if($qry == 1) {
				echo 2;
			}else{
				echo 0;
			}
		} else {
			$qry = $con->query("INSERT INTO `create_topic`(cc_name, cc_status, cc_create_by, cc_create_date) VALUES ('$cc_name','$cc_status','$user','$date')");
			if($qry == 1) {
				echo 1;
			}else{
				echo 0;
			}
		}
	}
}

function add_prime(){
	
	global $con;
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	if($user){	
		$p_cc_name = $_POST['p_cc_name'];
		$p_cc_id = $_POST['p_cc_id'];
		$p_id = $_POST['p_id'];
		$p_m_name = $_POST['p_m_name'];
		$p_m_id = $_POST['p_m_id'];
		$p_name = $_POST['p_name'];
		$p_status = $_POST['p_status'];
		$date = date('Y-m-d H:i:s');
		if($p_id){
			$qry = $con->query("update `prime_category` set p_cc_id = '$p_cc_id', p_cc_name = '$p_cc_name', p_m_id = '$p_m_id', p_m_name = '$p_m_name', p_name = '$p_name', p_status = '$p_status', p_l_update_by = '$user', p_l_update_date = '$date' where p_id = '$p_id' ");
			if($qry == 1) {
				echo 2;
			}else{
				echo 0;
			}
		} else {
			$qry = $con->query("INSERT INTO `prime_category`(p_cc_id, p_cc_name, p_m_id, p_m_name, p_name, p_status, p_create_by, p_create_date) VALUES ('$p_cc_id', '$p_cc_name', '$p_m_id', '$p_m_name', '$p_name', '$p_status', '$user', '$date')");
			if($qry == 1) {
				echo 1;
			}else{
				echo 0;
			}
		}
	}
}

function add_sub(){
	global $con;
	$user = isset($_SESSION['ad_email']) ? $_SESSION['ad_email'] : '';
	if($user){	
		$s_cc_name = $_POST['s_cc_name'];
		$s_cc_id = $_POST['s_cc_id'];
		$s_id = $_POST['s_id'];
		$s_m_name = $_POST['s_m_name'];
		$s_m_id = $_POST['s_m_id'];
		$s_p_name = $_POST['s_p_name'];
		$s_p_id = $_POST['s_p_id'];
		$s_name = $_POST['s_name'];
		$s_status = $_POST['s_status'];
		$date = date('Y-m-d H:i:s');
		
		if($s_id){
			$qry = $con->query("update `sub_category` set s_cc_id = '$s_cc_id', s_cc_name = '$s_cc_name', s_m_id = '$s_m_id', s_m_name = '$s_m_name', s_p_id = '$s_p_id', s_p_name = '$s_p_name', s_name = '$s_name', s_status = '$s_status', s_l_update_by = '$user', s_l_update_date = '$date' where s_id = '$s_id' ");
			if($qry == 1) {
				echo 2;
			} else {
				echo 0;
			}
		} else {
			$qry = $con->query("INSERT INTO `sub_category`(s_cc_id, s_cc_name, s_m_id, s_m_name, s_p_id, s_p_name, s_name, s_status, s_create_by, s_create_date) VALUES ('$s_cc_id', '$s_cc_name', '$s_m_id', '$s_m_name', '$s_p_id', '$s_p_name', '$s_name', '$s_status', '$user', '$date')");
			if($qry == 1) {
				echo 1;
			} else {
				echo 0;
			}
		}
	}
}

function add_medium(){
	
	global $con;
	$m_name = $_POST['m_name'];
	
	$medum = $con->query("INSERT INTO `medium`(`medium_name`) VALUES ('$m_name')");
	
	if($medum == 1) {
		echo '<script>window.location = "medium.php"</script>';
	}else{
		//echo 0;
	}
}

function medium_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $m_nm = $_POST['m_nm'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($m_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(medium_name like '%$m_nm%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " medium_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select medium_id,medium_name from medium $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
            $msg .= '<tr>'; 
            $msg .= '<td style="width:2%"><input type="checkbox" name="medium_id[]" class="rowsf"  id="check'.$r["medium_id"].'" value="'.$r["medium_id"].'"></td>';    
            $msg .= '<td style="width:5%">'.$r["medium_id"].'</td>';     
            $msg .= '<td style="width:25%">'.$r["medium_name"].'</td>';   
            $msg .= '<td style="width:5%"> <i onclick="editbtn(';
            $msg .= "'".$r["medium_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["medium_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM medium $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_medium(){
	global $con;
	$m_name = $_POST['m_name'];
	$me_id = $_POST['me_id'];
	
	$ms = $con->query("Update `medium` set `medium_name` = '$m_name' where medium_id = $me_id");

	if($ms == 1) {
		echo '<script>window.location = "medium_list.php"</script>';
	}else{
		echo 0;
	}
}

function delete_medium(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from medium where medium_id IN($ids) ");
    } else {
        $re = $con->query("delete from medium ");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function add_class(){
	
	global $con;
	$c_name = $_POST['c_name'];
	
	$class = $con->query("INSERT INTO `class`(`cl_name`) VALUES ('$c_name')");
	//echo "INSERT INTO `medium`(`medium_name`) VALUES ('$m_name')";
	
	if($class == 1) {
		echo '<script>window.location = "class.php"</script>';
	}else{
		echo 0;
	}
}

function class_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $c_nm = $_POST['c_nm'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($c_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(cl_name like '%$c_nm%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " cl_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select cl_id,cl_name from class $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
            $msg .= '<tr>'; 
            $msg .= '<td style="width:2%"><input type="checkbox" name="cl_id[]" class="rowsf"  id="check'.$r["cl_id"].'" value="'.$r["cl_id"].'"></td>';    
            $msg .= '<td style="width:5%">'.$r["cl_id"].'</td>';     
            $msg .= '<td style="width:25%">'.$r["cl_name"].'</td>';   
            $msg .= '<td style="width:5%"> <i onclick="editbtn(';
            $msg .= "'".$r["cl_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["cl_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM class $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_class(){
	global $con;
	$c_name = $_POST['c_name'];
	$cl_id = $_POST['cl_id'];
	
	$cl = $con->query("Update `class` set `cl_name` = '$c_name' where cl_id = $cl_id");

	if($cl == 1) {
		echo '<script>window.location = "class_list.php"</script>';
	}else{
		echo 0;
	}
}

function delete_class(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from class where cl_id IN($ids) ");
    } else {
        $re = $con->query("delete from class ");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function add_board(){
	
	global $con;
	$b_name = $_POST['b_name'];
	$sh_name = $_POST['sh_name'];
	
	$brd = $con->query("INSERT INTO `board`(`board_name` , `board_short_name`) VALUES ('$b_name' , '$sh_name')");
	//echo "INSERT INTO `board`(`board_name` , `board_short_name`) VALUES ('$b_name' , '$sh_name')";
	
	if($brd == 1) {
		echo '<script>window.location = "board.php"</script>';
	}else{
		echo 0;
	}
}

function board_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $b_nm = $_POST['b_nm'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($b_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(board_short_name like '%$b_nm%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " board_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select board_id,board_name,board_short_name from board $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
            $msg .= '<tr>'; 
            $msg .= '<td style="width:2%"><input type="checkbox" name="board_id[]" class="rowsf"  id="check'.$r["board_id"].'" value="'.$r["board_id"].'"></td>';    
            $msg .= '<td style="width:15%">'.$r["board_id"].'</td>';     
            $msg .= '<td style="width:15%">'.$r["board_name"].'</td>';   
            $msg .= '<td style="width:15%">'.$r["board_short_name"].'</td>';   
            $msg .= '<td style="width:15%"> <i onclick="editbtn(';
            $msg .= "'".$r["board_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["board_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM board $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_board(){
	global $con;
	$b_id = $_POST['b_id'];
	$b_name = $_POST['b_name'];
	$sh_name = $_POST['sh_name'];
	
	$eb = $con->query("Update `board` set `board_name` = '$b_name' , `board_short_name` = '$sh_name' where board_id = $b_id");
	//echo "Update `board` set `board_name` = '$b_name' , `board_short_name` = '$sh_name' where board_id = $b_id";
	if($eb == 1) {
		echo '<script>window.location = "board_list.php"</script>';
	}else{
		echo 0;
	}
}

function delete_board(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from board where board_id IN($ids) ");
    } else {
        $re = $con->query("delete from board ");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function delete_topic(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from create_topic where cc_id IN($ids) ");
		if($re == 1){
			echo 1;
		} else {
			echo 0;
		}
    }
}

function delete_email_address(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from email_address where ea_id IN($ids) ");
		if($re == 1){
			echo 1;
		} else {
			echo 0;
		}
    }
}

function delete_email_templates(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from email_tamplate where et_id IN($ids) ");
		if($re == 1){
			echo 1;
		} else {
			echo 0;
		}
    }
}

function topic_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $mst_nm = $_POST['cc_name'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($mst_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(cc_name like '%$mst_nm%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " cc_create_date desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select cc_id, cc_name, cc_status from create_topic $veer1  LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['cc_status'] == 0){
				$cc_status = 'Yes';
			} else {
				$cc_status = 'No';
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="cc_id[]" class="rowsf"  id="check'.$r["cc_id"].'" value="'.$r["cc_id"].'"></td>';    
            $msg .= '<td>'.$r["cc_id"].'</td>';     
            $msg .= '<td>'.$r["cc_name"].'</td>';   
            $msg .= '<td>'.$cc_status.'</td>';   
            $msg .= '<td> <i onclick="editbtn(';
							$msg .= "'".$r["cc_id"]."'";
							$msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
							<i onclick="deletedbtn('.$r["cc_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="5">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM create_topic $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	
	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
	
	echo $msg;
	mysqli_close($con); 
}

function master_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    
    $m_name = $_POST['m_name'];
    $m_cc_name = $_POST['m_cc_name'];
    $display = $_POST['display'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	if($m_name == ""){
        $veer .= "";
    } else {
        $veer .= " m_name like '%$m_name%' and ";
    }
    
	if($m_cc_name == ""){
        $veer .= "";
    } else {
        $veer .= " m_cc_name = '$m_cc_name' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " m_create_date desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where m_status = 0 and cc_status = 0 order by ".$orderby;
    } else {
        $veer1 = ' where m_status = 0 and cc_status = 0 and '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select m_id, m_name, m_cc_id, cc_name as m_cc_name, m_status from create_topic as c join master_category as m on c.cc_id = m.m_cc_id $veer1  LIMIT $start, $per_page ");
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['m_status'] == 0){
				$m_status = 'Yes';
			} else {
				$m_status = 'No';
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="m_id[]" class="rowsf"  id="check'.$r["m_id"].'" value="'.$r["m_id"].'"></td>';    
            $msg .= '<td>'.$r["m_id"].'</td>';     
			if($display == 1){
				$msg .= '<td>'.$r["m_cc_name"].'</td>';
			}
            $msg .= '<td>'.$r["m_name"].'</td>';   
            $msg .= '<td>'.$m_status.'</td>';   
            $msg .= '<td><i onclick="editbtn(';
					$msg .= "'".$r["m_id"]."'";
					$msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                    <i onclick="deletedbtn('.$r["m_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>';
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }
	
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM create_topic as c join master_category as m on c.cc_id = m.m_cc_id $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	
	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
	
	echo $msg;
	mysqli_close($con); 
}

function edit_master(){
	global $con;
	$mast_name = $_POST['m_name'];
	$mid = $_POST['ms_id'];
	
	$ms = $con->query("Update `m_catagory` set `mc_name` = '$mast_name' where mc_id = $mid");

	if($ms == 1) {
		echo '<script>window.location = "master_list.php"</script>';
	}else{
		echo 0;
	}
}

function delete_master(){
    global $con;
    $ids = $_POST['id']; 
    
    $re = $con->query("delete from master_category where m_id IN($ids)");
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function prime_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    }
    
    $p_name = $_POST['p_name'];
    $p_m_name = $_POST['p_m_name'];
    $p_cc_name = $_POST['p_cc_name'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $display = $_POST['display'];
    $veer = "";
     
	if($p_name == ""){
        $veer .= "";
    } else {
        $veer .= " p_name like '%$p_name%' and ";
    }
	
	if($p_m_name == ""){
        $veer .= "";
    } else {
        $veer .= " p_m_name like '%$p_m_name%' and ";
    }
    
	if($p_cc_name == ""){
        $veer .= "";
    } else {
        $veer .= " p_cc_name like '%$p_cc_name%' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " p_create_date desc ";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where p_status = 0 and m_status = 0 and cc_status = 0 order by ".$orderby;
    } else {
        $veer1 = ' where p_status = 0 and m_status = 0 and cc_status = 0 and '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
	 	
    $spre = $con->query("select p_id, cc_name as p_cc_name, m_name as p_m_name, p_name, p_status from create_topic as c join master_category as m on c.cc_id = m.m_cc_id join prime_category as p on p.p_cc_id = c.cc_id and p.p_m_id = m.m_id $veer1  LIMIT $start, $per_page ");


    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['p_status'] == 0){
				$p_status = 'Yes';
			} else {
				$p_status = 'No';
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="p_id[]" class="rowsf"  id="check'.$r["p_id"].'" value="'.$r["p_id"].'"></td>';    
            $msg .= '<td>'.$r["p_id"].'</td>';     
			if($display == 1){
				$msg .= '<td>'.$r["p_cc_name"].'</td>';
			}
            $msg .= '<td>'.$r["p_m_name"].'</td>';   
            $msg .= '<td>'.$r["p_name"].'</td>';   
            $msg .= '<td>'.$p_status.'</td>';   
            $msg .= '<td> <i onclick="editbtn(';
            $msg .= "'".$r["p_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["p_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM create_topic as c join master_category as m on c.cc_id = m.m_cc_id join prime_category as p on p.p_cc_id = c.cc_id and p.p_m_id = m.m_id $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}

	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
		
	echo $msg;
	mysqli_close($con); 
}

function edit_prime(){
	
	global $con;
	$mast_id = $_POST['mu_id'];
	$prim_nm = $_POST['p_name'];
	$prid = $_POST['pid'];
	
	$pri = $con->query("update `p_catagory` set `pc_name` = '$prim_nm',`mc_id` = '$mast_id' where pc_id = $prid");
	//echo "update `p_catagory` set `pc_name` = '$prim_nm',`mc_id` = '$mast_id' where pc_id = $prid";
	if($pri == 1) {
		echo '<script>window.location = "prime_list.php"</script>';
	}else{
		echo 0;
	}
}

function delete_prime(){
    global $con;
    $ids = $_POST['id']; 
    $re = $con->query("delete from prime_category where p_id IN($ids) ");
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function sub_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1; 
    }
    
    $s_cc_name = $_POST['s_cc_name'];
    $s_m_name = $_POST['s_m_name'];
    $s_p_name = $_POST['s_p_name'];
    $s_name = $_POST['s_name'];
    $display = $_POST['display'];
    
	$ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
	 
	if($s_cc_name == ""){
        $veer .= "";
    } else {
        $veer .= " s_cc_name like '%$s_cc_name%' and ";
    }
	
	if($s_m_name == ""){
        $veer .= "";
    } else {
        $veer .= " s_m_name like '%$s_m_name%' and ";
    }
    
	if($s_p_name == ""){
        $veer .= "";
    } else {
        $veer .= " s_p_name like '%$s_p_name%' and ";
    }
	
	if($s_name == ""){
        $veer .= "";
    } else {
        $veer .= " s_name like '%$s_name%' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " s_create_date desc ";
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
	$dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where s_status = 0 and p_status = 0 and m_status = 0 and cc_status = 0 order by ".$orderby;
    } else {
        $veer1 = ' where s_status = 0 and p_status = 0 and m_status = 0 and cc_status = 0 and '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select s_id, cc_name as s_cc_name, m_name as s_m_name, p_name as s_p_name, s_name, s_status from sub_category as s join create_topic as c on s.s_cc_id = c.cc_id join master_category as m on s.s_m_id = m.m_id join prime_category as p on s.s_p_id = p.p_id $veer1 LIMIT $start, $per_page ");
	
	$msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['s_status'] == 0){
				$s_status = 'Yes';
			} else {
				$s_status = 'No';
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="s_id[]" class="rowsf"  id="check'.$r["s_id"].'" value="'.$r["s_id"].'"></td>';    
            $msg .= '<td>'.$r["s_id"].'</td>';     
            if($display == 1){
				$msg .= '<td>'.$r["s_cc_name"].'</td>';   
            }
			$msg .= '<td>'.$r["s_m_name"].'</td>';    
            $msg .= '<td>'.$r["s_p_name"].'</td>';    
            $msg .= '<td>'.$r["s_name"].'</td>';    
            $msg .= '<td>'.$s_status.'</td>';    
            $msg .= '<td> <i onclick="editbtn(';
            $msg .= "'".$r["s_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletedbtn('.$r["s_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i></td>'; 
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }
	mysqli_set_charset($con, 'utf8');
	$query_pag_num = "SELECT COUNT(*) AS count FROM sub_category as s join create_topic as c on s.s_cc_id = c.cc_id join master_category as m on s.s_m_id = m.m_id join prime_category as p on s.s_p_id = p.p_id $veer1";
	$result_pag_num = $con->query($query_pag_num);
	$row = mysqli_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);

	if($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	
	$msg .= "pagination_part<div class='pagination'><ul>"; 
	// FOR ENABLING THE FIRST BUTTON
	if ($first_btn && $cur_page > 1) {
		$msg .= "<li p='1' class='active'>First</li>";
	} else if ($first_btn) {
		$msg .= "<li p='1' class='inactive'>First</li>";
	} 
	// FOR ENABLING THE PREVIOUS BUTTON
	if ($previous_btn && $cur_page > 1) {
		$pre = $cur_page - 1;
		$msg .= "<li p='$pre' class='active'>Previous</li>";
	} else if ($previous_btn) {
		$msg .= "<li class='inactive'>Previous</li>";
	}
	for ($i = $start_loop; $i <= $end_loop; $i++) { 
		if ($cur_page == $i){
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
		} else {
			$msg .= "<li p='$i' class='active'>{$i}</li>";
		}   
	} 
	// TO ENABLE THE NEXT BUTTON
	if ($next_btn && $cur_page < $no_of_paginations) {
		$nex = $cur_page + 1;
		$msg .= "<li p='$nex' class='active'>Next</li>";
	} else if ($next_btn) {
		$msg .= "<li class='inactive'>Next</li>";
	} 
	// TO ENABLE THE END BUTTON
	if ($last_btn && $cur_page < $no_of_paginations) {
		$msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
	} else if ($last_btn) {
		$msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
	}
	 
	$msg .= "</ul></div>pagination_part".$count; 
	
	echo $msg;
	mysqli_close($con); 
}
 
function delete_sub(){
    global $con;
    $ids = $_POST['id'];
	$re = $con->query("delete from sub_category where s_id IN($ids)");
    if($re == 1){
       echo 1;
    }else{
        echo 0;
    }
}

function add_product(){
	
	global $con;
	$mst_id = $_POST['mst_id'];
	$prm_id = $_POST['prm_id'];
	$sub_id = $_POST['sub_id'];
	$p_title = $_POST['p_title'];
	$b_name = $_POST['b_name'];
	$item_no = $_POST['item_no'];
	$p_size = $_POST['p_size'];
	$p_color = $_POST['p_color'];
	$mou = $_POST['mou'];
	//$p_qty = $_POST['p_qty'];
	if($_POST['unit'] != ""){
		$unit = $_POST['unit'];
	}else{
		$unit = "";
	}
	
	$e_price = $_POST['e_price'];
	$l_price = $_POST['l_price'];
	$m_price = $_POST['m_price'];
	$p_desc = $_POST['p_desc'];
	$check_list = $_POST['check_list'];
	for ($i=0; $i<sizeof($check_list);$i++) {
		$prj .= $check_list[$i]. ",";
	}
	$prj = rtrim($prj , ',');
	
	$ven_list = $_POST['vendor_list'];
	for ($i=0; $i<sizeof($ven_list);$i++) {
		$ven_nm .= $ven_list[$i]. ",";
	}
	$venlist = rtrim($ven_nm , ',');
	//$venlist = explode(",", $ven_nm);
	
	$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
	if (!file_exists($PNG_TEMP_DIR))
	mkdir($PNG_TEMP_DIR);
	$filename5 = $PNG_TEMP_DIR.'test.png';
	
	include ("../qrlib.php");
	
	$PNG_WEB_DIR = 'temp/';
	$errorCorrectionLevel = 'M';
	$matrixPointSize = 4;
	
	$uniqueid_product = "pr_" .date('hisdmy');  
	echo '<input type="hidden" name="data" value="'.($uniqueid_product?htmlspecialchars($uniqueid_product):'PHP QR Code :)').'" />';
		//it's very important!
		if (trim($uniqueid_product == ''))
			//echo "data cannot be empty!!!";
		// user data
		$filename5 = $PNG_TEMP_DIR.($uniqueid_product).'.png';
		QRcode::png($uniqueid_product, $filename5, $errorCorrectionLevel, $matrixPointSize, 2);
	
	$path = "../uploads/Product";
	mkdir($path,0777,true);
	
	//if($regis1_takepic == ""){
		if((isset($_FILES['prd_pic']['name'])) && $_FILES['prd_pic']['name'] != ""){
			if (0 < $_FILES['prd_pic']['error']) { 
				$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['prd_pic']['error'];
				echo "<script>window.location = 'product.php';</script>";
			} 
			else { 
				if (file_exists('../uploads/Product/'. $_FILES['prd_pic']['name'])){
					$path1 = '../uploads/Product/'. $_FILES['prd_pic']['name'];
					//echo 'File already exists : $path1';
				}else{
					move_uploaded_file($_FILES['prd_pic']['tmp_name'], '../uploads/Product/'. $_FILES['prd_pic']['name']);
					$path1 = '../uploads/Product/'.$_FILES['prd_pic']['name'];
				}
			}
		}
	/* }else{
		$path1 = $regis1_takepic;
	} */
				      
				$prod = $con->query("INSERT INTO `product`(`p_qrid`,`proj_id`,`p_title`,`mc_id`,`pc_id`,`sub_id`,`comp_name`,`item_no`,`size`,`color`,`unit`,`p_mou`,`esti_price`,`logis_price`,`manage_price`,`description`,`p_image`,`pre_vendor`) VALUES ('$filename5','$prj','$p_title','$mst_id','$prm_id','$sub_id','$b_name','$item_no','$p_size','$p_color','$unit','$mou','$e_price','$l_price','$m_price','$p_desc','$path1','$venlist')");
				
				//echo "INSERT INTO `product`(`p_qrid`,`p_title`,`sub_id`,`comp_name`,`item_no`,`size`,`color`,`qty`,`esti_price`,`logis_price`,`manage_price`,`description`,`p_image`) VALUES ('$filename5','$p_title','$sub_id','$b_name','$item_no','$p_size','$p_color','$p_qty','$e_price','$l_price','$m_price','$p_desc','$path1')";
				
				//echo 'File successfully uploaded : uploads/Student/' . $_FILES['stud_pic']['name'];
				if($prod == 1) {
					echo '<script>window.location = "product_list.php"</script>';
				}else{
					echo 0;
				}
}

function product_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
	
    $mast_nm = $_POST['mast_nm'];
    $prm_nm = $_POST['prm_nm'];
    $sub_nm = $_POST['sub_nm'];
    $brd_nm = $_POST['brd_nm'];
	$ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
	
	$sel = $con->query("select sc_id from s_catagory where sc_name = '$sub_nm'");
	$sub = mysqli_fetch_array($sel);
	$sid = $sub['sc_id'];
	
	$sel = $con->query("select mc_id from m_catagory where mc_name = '$mast_nm'");
	$mast = mysqli_fetch_array($sel);
	$mid = $mast['mc_id'];
	
	$sel = $con->query("select pc_id from p_catagory where pc_name = '$prm_nm'");
	$prm = mysqli_fetch_array($sel);
	$pid = $prm['pc_id'];
	
    
	if($mast_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(mc_id like '%$mid%') and ";
    }
	
	if($prm_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(pc_id like '%$pid%') and ";
    }
	
	if($sub_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(sub_id like '%$sid%') and ";
    }
	
	if($brd_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(comp_name like '%$brd_nm%') and ";
    }
	
	if($fields == "" || $ord_sort == ""){
        $orderby = " p_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select proj_id,sub_id,mc_id,pc_id,p_id,p_title,comp_name,size,color,qty,p_image from product $veer1 LIMIT $start, $per_page ");
    

    $msg = "";
	$no = 1;
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['mc_id'] != ""){
				$mid = $r['mc_id'];
				$mast = $con->query("select mc_name from m_catagory where mc_id = $mid");
				$r1 = mysqli_fetch_array($mast);
			}else{
				$mid = "";
			}
			
			if($r['pc_id'] != ""){
				$pid = $r['pc_id'];
				$prm = $con->query("select pc_name from p_catagory where pc_id = $pid");
				$r2 = mysqli_fetch_array($prm);
			}else{
				$pid = "";
			}
			
			if($r['sub_id'] != ""){
				$sid = $r['sub_id'];
				$sub = $con->query("select sc_name from s_catagory where sc_id = $sid");
				$r3 = mysqli_fetch_array($sub);
			}else{
				$sid = "";
			}
			$projcts = "";
			if($r['proj_id'] != ""){
				$pid = $r['proj_id'];
				$ps_list = explode(",", $pid);
				$numberflist = count($ps_list);
				if($numberflist <= 1){
					$proj = $con->query("select proj_title from project where proj_id = $pid");
					$pr = mysqli_fetch_array($proj);
					$projcts = $pr['proj_title'];
				}else{
					for($i = 0 ;$i < $numberflist ; $i++ ){ 
						$proj = $con->query("select proj_title from project where proj_id = $ps_list[$i]");
						$pr = mysqli_fetch_array($proj);
						$projcts .= $pr['proj_title']. ",";
					}
					$projcts = rtrim($projcts , ',');
				}
			}else{
				$pid = "";
			}
			
            $msg .= '<tr style="with:135%;">'; 
            $msg .= '<td style="width:1%"><input type="checkbox" name="p_id[]" class="rowsf"  id="check'.$r["p_id"].'" value="'.$r["p_id"].'"></td>';    
            $msg .= '<td style="width:5%">'.$no++.'</td>';     
            $msg .= '<td style="width:15%">'.$r["p_title"].'</td>';   
            $msg .= '<td style="width:15%">'.$r1["mc_name"].'</td>';   
            $msg .= '<td style="width:15%">'.$r2["pc_name"].'</td>';   
            $msg .= '<td style="width:15%">'.$r3["sc_name"].'</td>';   
            $msg .= '<td style="width:15%">'.$r["comp_name"].'</td>';   
            $msg .= '<td style="width:10%">'.$projcts.'</td>';  
            $msg .= '<td style="width:10%"><img src="'.$r["p_image"].'" width="100" height="100" /></td>';   
            $msg .= '<td style="width:15%"> <i onclick="editbtn(';
            $msg .= "'".$r["p_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["p_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM product $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_product(){
	
	global $con;
	$mst_id = $_POST['mst_id'];
	$prm_id = $_POST['prm_id'];
	$sub_id = $_POST['sub_id'];
	$p_title = $_POST['p_title'];
	$b_name = $_POST['b_name'];
	$item_no = $_POST['item_no'];
	$p_size = $_POST['p_size'];
	$p_color = $_POST['p_color'];
	//$p_qty = $_POST['p_qty'];
	$mou = $_POST['mou'];
	$unit = $_POST['unit'];
	$e_price = $_POST['e_price'];
	$l_price = $_POST['l_price'];
	$m_price = $_POST['m_price'];
	$p_desc = $_POST['p_desc'];
	$p_id = $_POST['p_id'];
	$ven_list = $_POST['vendor_list'];
	for ($i=0; $i<sizeof($ven_list);$i++) {
		$ven_nm .= $ven_list[$i]. ",";
	}
	$venlist = rtrim($ven_nm , ',');
	
	//if($regis1_takepic == ""){
		if((isset($_FILES['prd_pic']['name'])) && $_FILES['prd_pic']['name'] != ""){
			if (0 < $_FILES['prd_pic']['error']) { 
				$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['prd_pic']['error'];
				echo "<script>window.location = 'product.php';</script>";
			} 
			else { 
				if (file_exists('../uploads/Product/'. $_FILES['prd_pic']['name'])){
					$path1 = '../uploads/Product/'. $_FILES['prd_pic']['name'];
					//echo 'File already exists : $path1';
				}else{
					move_uploaded_file($_FILES['prd_pic']['tmp_name'], '../uploads/Product/'. $_FILES['prd_pic']['name']);
					$path1 = '../uploads/Product/'.$_FILES['prd_pic']['name'];
				}
			}
		}else {
			$cr = $con->query("select p_image from product where p_id = '$p_id'");
			$crrow = mysqli_fetch_array($cr);
			$path1 = $crrow['p_image'];
		}
	/* }else{
		$path1 = $regis1_takepic;
	} */
				
				$ed_p = $con->query("update `product` set `p_title` = '$p_title', `mc_id` = '$mst_id', `pc_id` = '$prm_id', `sub_id` = '$sub_id', `comp_name` = '$b_name',`item_no` = '$item_no' ,`size` = '$p_size' ,`color` = '$p_color' ,`unit` = '$unit' ,`p_mou` = '$mou' ,`esti_price` = '$e_price' ,`logis_price` = '$l_price' ,`manage_price` = '$m_price' ,`description` = '$p_desc', `p_image` = '$path1', `pre_vendor` = '$venlist' where p_id = $p_id");
				
				//echo "update `product` set `p_title` = '$p_title', `mc_id` = '$mst_id', `pc_id` = '$prm_id', `sub_id` = '$sub_id', `comp_name` = '$b_name',`item_no` = '$item_no' ,`size` = '$p_size' ,`color` = '$p_color' ,`qty` = '$p_qty' ,`esti_price` = '$e_price' ,`logis_price` = '$l_price' ,`manage_price` = '$m_price' ,`description` = '$p_desc', `p_image` = '$path1' where p_id = $p_id";
				
				//echo "INSERT INTO `product`(`sc_id`,`board_id`,`meduim_id`,`std_class`,`product_name`,`groups`,`pic`) VALUES ('$sub_id','$bord_id','$med_id','$class_nm','$p_name','$grp','$path1')";
				
				//echo 'File successfully uploaded : uploads/Student/' . $_FILES['stud_pic']['name'];
				if($ed_p == 1) {
					echo '<script>window.location = "product_list.php"</script>';
				}else{
					echo 0;
				}
}

function delete_product(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from product where p_id IN($ids) ");
    } else {
        $re = $con->query("delete from product ");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function add_project(){
	
	global $con;
	$cat_id = $_POST['cat_id'];
	$prj_title = $_POST['prj_title'];
	$prj_data = $_POST['prj_data'];
	$why_pro = $_POST['why_pro'];
	$how_pro = $_POST['how_pro'];
	$part_name = $_POST['part_name'];
	$st_date = $_POST['st_date'];
	$end_date = $_POST['end_date'];
	
	$path = "../uploads/Project";
	mkdir($path,0777,true);
	
	//if($regis1_takepic == ""){
		if((isset($_FILES['comp_logo']['name'])) && $_FILES['comp_logo']['name'] != ""){
			if (0 < $_FILES['comp_logo']['error']) { 
				$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['comp_logo']['error'];
				echo "<script>window.location = 'project.php';</script>";
			} 
			else { 
				if (file_exists('../uploads/Project/'. $_FILES['comp_logo']['name'])){
					$path1 = 'uploads/Project/'. $_FILES['comp_logo']['name'];
					//echo 'File already exists : $path1';
				}else{
					move_uploaded_file($_FILES['comp_logo']['tmp_name'], '../uploads/Project/'. $_FILES['comp_logo']['name']);
					$path1 = 'uploads/Project/'.$_FILES['comp_logo']['name'];
				}
			}
		}
	/* }else{
		$path1 = $regis1_takepic;
	} */
	
	//if($regis1_takepic == ""){
		if((isset($_FILES['prj_pic']['name'])) && $_FILES['prj_pic']['name'] != ""){
			if (0 < $_FILES['prj_pic']['error']) { 
				$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['prj_pic']['error'];
				echo "<script>window.location = 'project.php';</script>";
			} 
			else { 
				if (file_exists('../uploads/Project/'. $_FILES['prj_pic']['name'])){
					$path2 = 'uploads/Project/'. $_FILES['prj_pic']['name'];
					//echo 'File already exists : $path1';
				}else{
					move_uploaded_file($_FILES['prj_pic']['tmp_name'], '../uploads/Project/'. $_FILES['prj_pic']['name']);
					$path2 = 'uploads/Project/'.$_FILES['prj_pic']['name'];
				}
			}
		}
	/* }else{
		$path1 = $regis1_takepic;
	} */
				
		$prj = $con->query("INSERT INTO `project`(`proj_cat`,`proj_title`,`proj_data`,`why_this`,`how_achv`,`partener_name`,`comp_logo`,`proj_pic`,`project_join_edate`,`project_enddate`) VALUES ('$cat_id','$prj_title','$prj_data','$why_pro','$how_pro','$part_name','$path1','$path2','$st_date','$end_date')");
		
		if($prj == 1){
			echo '<script>window.location = "project_list.php"</script>';	
		}else{
			echo 0;
		}
}

function project_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $prjtit = $_POST['prjtit'];
    $prjst = $_POST['prjst'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($prjtit == ""){
        $veer .= "";
    } else {
        $veer .= "(proj_title like '%$prjtit%') and ";
    }
    
    /* if($prjst == ""){
        $veer .= "";
    } else {
		if($prjst == "Unapprove"){
			$st = "0";
			$veer .= "(proj_status like '%$st%') and ";
		}else{
			$st = "1";
			$veer .= "(proj_status like '%$st%') and ";
		}
    }
     */
    if($fields == "" || $ord_sort == ""){
        $orderby = " proj_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " where proj_status = 0 order by ".$orderby;
    } else {
        $veer1 = ' where proj_status = 0 and '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select proj_id,proj_cat,proj_title,proj_data,proj_pic,work_status from project $veer1  LIMIT $start, $per_page ");
	$no = 1;
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r['proj_cat'] != ""){
				$catid = $r['proj_cat'];
				$cat = $con->query("select pc_name from project_cat where pc_id = $catid");
				echo "select pc_name project_cat where pc_id = $catid";
				$cr = mysqli_fetch_array($cat);
			}else{
				$catid = "";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="proj_id[]" class="rowsf"  id="check'.$r["proj_id"].'" value="'.$r["proj_id"].'"></td>';    
            $msg .= '<td>'.$no++.'</td>';     
            $msg .= '<td onclick="call_dash('.$r['proj_id'].');">'.$cr["pc_name"].'</td>';     
            $msg .= '<td onclick="call_dash('.$r['proj_id'].');">'.$r["proj_title"].'</td>';       
            $msg .= '<td onclick="call_dash('.$r['proj_id'].');">'.$r["proj_data"].'</td>';  
            $msg .= '<td><img src="../'.$r["proj_pic"].'" height="100" width="150"/></td>'; 
			if($r["work_status"] == 1){
                $msg .= '<td style="width:8%"> Complete </td>';
            }
            else{
                $msg .= '<td style="width:8%">Working</td>';
            }
            $msg .= '<td style="width:8%"> <i onclick="editbtn(';
            $msg .= "'".$r["proj_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["proj_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM project $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_project(){
	
	global $con;
	$cat_id = $_POST['cat_id'];
	$prj_title = $_POST['prj_title'];
	$prj_data = mysqli_real_escape_string($con, $_POST['prj_data']);
	$why_pro = mysqli_real_escape_string($con, $_POST['why_pro']);
	$how_pro = mysqli_real_escape_string($con, $_POST['how_pro']);
	$part_name = mysqli_real_escape_string($con, $_POST['part_name']);
	$prj_status = $_POST['prj_status'];
	$prjid = $_POST['prjid'];
	$st_date = $_POST['st_date'];
	$end_date = $_POST['end_date'];
	
	//if($regis1_takepic == ""){
		if((isset($_FILES['comp_logo']['name'])) && $_FILES['comp_logo']['name'] != ""){
			if (0 < $_FILES['comp_logo']['error']) { 
				$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['comp_logo']['error'];
				echo "<script>window.location = 'project.php';</script>";
			} 
			else { 
				if (file_exists('../uploads/Project/'. $_FILES['comp_logo']['name'])){
					$path1 = '../uploads/Project/'. $_FILES['comp_logo']['name'];
					//echo 'File already exists : $path1';
				}else{
					move_uploaded_file($_FILES['comp_logo']['tmp_name'], '../uploads/Project/'. $_FILES['comp_logo']['name']);
					$path1 = '../uploads/Project/'.$_FILES['comp_logo']['name'];
				}
			}
		}else {
			$cr = $con->query("select comp_logo from project where proj_id = '$prjid'");
			$crrow = mysqli_fetch_array($cr);
			$path1 = $crrow['comp_logo'];
		}
	/* }else{
		$path1 = $regis1_takepic;
	} */
	
	//if($regis1_takepic == ""){
		if((isset($_FILES['prj_pic']['name'])) && $_FILES['prj_pic']['name'] != ""){
			if (0 < $_FILES['prj_pic']['error']) { 
				$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['prj_pic']['error'];
				echo "<script>window.location = 'project.php';</script>";
			} 
			else { 
				if (file_exists('../uploads/Project/'. $_FILES['prj_pic']['name'])){
					$path2 = '../uploads/Project/'. $_FILES['prj_pic']['name'];
					//echo 'File already exists : $path1';
				}else{
					move_uploaded_file($_FILES['prj_pic']['tmp_name'], '../uploads/Project/'. $_FILES['prj_pic']['name']);
					$path2 = '../uploads/Project/'.$_FILES['prj_pic']['name'];
				}
			}
		}else {
			$cr = $con->query("select proj_pic from project where proj_id = '$prjid'");
			$crrow = mysqli_fetch_array($cr);
			$path2 = $crrow['proj_pic'];
		}
	/* }else{
		$path1 = $regis1_takepic;
	} */
				
		$prj_edit = $con->query("update `project` set `proj_cat` = '$cat_id' ,`proj_title` = '$prj_title',`proj_data` = '$prj_data',`why_this` = '$why_pro',`how_achv` = '$how_pro',`partener_name` = '$part_name',`comp_logo` = '$path1',`proj_pic` = '$path2',`work_status` = '$prj_status',`project_join_edate` = '$st_date',`project_enddate` = '$end_date'  where `proj_id` = '$prjid'");
		//echo "update `project` set `proj_cat` = '$cat_id' ,`proj_title` = '$prj_title',`proj_data` = '$prj_data',`why_this` = '$why_pro',`how_achv` = '$how_pro',`partener_name` = '$part_name',`comp_logo` = '$path1',`proj_pic` = '$path2',`work_status` = '$prj_status',`project_join_edate` = '$st_date',`project_enddate` = '$end_date'  where `proj_id` = '$prjid'";
		if($prj_edit == 1){
			echo '<script>window.location = "project_list.php"</script>';	
		}else{
			echo 0;
		}
}

function delete_project(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("update project set proj_status = 1 where proj_id IN($ids) ");
    } 
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function add_proj_cate(){
	
	global $con;
	$p_name = $_POST['p_name'];
	
	$msat = $con->query("INSERT INTO `project_cat`(`pc_name`) VALUES ('$p_name')");
	
	if($msat == 1) {
		echo '<script>window.location = "project_cate_list.php"</script>';
	}else{
		echo 0;
	}
}

function proj_cate_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $cat_nm = $_POST['cat_nm'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($cat_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(pc_name like '%$cat_nm%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " pc_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select pc_id,pc_name from project_cat $veer1  LIMIT $start, $per_page ");
	
	$no = 1;
    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
            $msg .= '<tr>'; 
            $msg .= '<td style="width:2%"><input type="checkbox" name="pc_id[]" class="rowsf"  id="check'.$r["pc_id"].'" value="'.$r["pc_id"].'"></td>';    
            $msg .= '<td style="width:15%">'.$no++.'</td>';     
            $msg .= '<td style="width:15%">'.$r["pc_name"].'</td>';   
            $msg .= '<td style="width:15%"> <i onclick="editbtn(';
            $msg .= "'".$r["pc_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["pc_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM project_cat $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}


function edit_proj_cate(){
	
	global $con;
	$p_name = $_POST['p_name'];
	$pc_id = $_POST['pc_id'];
	
	$msat = $con->query("UPDATE `project_cat` set `pc_name` = '$p_name' where pc_id = $pc_id");
	
	if($msat == 1) {
		echo '<script>window.location = "project_cate_list.php"</script>';
	}else{
		echo 0;
	}
}

function delete_proj_cate(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from project_cat where pc_id IN($ids)");
    } else {
        $re = $con->query("delete from project_cat ");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function add_help(){
	
	global $con;
	$hlp_title = $_POST['hlp_title'];
	
	//$path = "uploads/Help";
	//mkdir($path,0777,true);
	
	if (isset($_FILES['hlp_pic']['name'])) { 
		if (0 < $_FILES['hlp_pic']['error']) { 
			echo 'Error during file upload' . $_FILES['hlp_pic']['error'];
		} 
		else { 
			if (file_exists('uploads/Help/'. $_FILES['hlp_pic']['name'])){
				$path1 = 'uploads/Help/'. $_FILES['hlp_pic']['name'];
				echo 'File already exists : $path1';
			}
			else {
				move_uploaded_file($_FILES['hlp_pic']['tmp_name'], 'uploads/Help/'. $_FILES['hlp_pic']['name']);
				$path1 = 'uploads/Help/'. $_FILES['hlp_pic']['name'];
				
				$hlp = $con->query("INSERT INTO `start_helping`(`help_title`,`help_pic`) VALUES ('$hlp_title','$path1')");
				
				//echo 'File successfully uploaded : uploads/Student/' . $_FILES['stud_pic']['name'];
				if($hlp == 1){
					echo '<script>window.location = "helping_list.php"</script>';	
				}else{
					echo 0;
				}
			} 
		}
	}else{
		echo 'Please choose a file';
	}
}

function help_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $hlptit = $_POST['hlptit'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
   if($hlptit == ""){
        $veer .= "";
    } else {
        $veer .= "(help_title like '%$hlptit%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " help_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select help_id,help_title,help_pic from start_helping $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
            $msg .= '<tr style="width:42%">'; 
            $msg .= '<td style="width:2%"><input type="checkbox" name="help_id[]" class="rowsf"  id="check'.$r["help_id"].'" value="'.$r["help_id"].'"></td>';    
            $msg .= '<td style="width:5%">'.$r["help_id"].'</td>';     
            $msg .= '<td style="width:20%">'.$r["help_title"].'</td>';
            $msg .= '<td style="width:10%"><img src="'.$r["help_pic"].'" height="100" width="200"/></td>'; 
            $msg .= '<td style="width:5%"> <i onclick="editbtn(';
            $msg .= "'".$r["help_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["help_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i>
                    </td>'; 
            
            $msg .= '</tr>';
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM start_helping $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_help(){
	
	global $con;
	$hlp_title = $_POST['hlp_title'];
	$hlp_id = $_POST['hlp_id'];
	
	//$path = "uploads/Help";
	//mkdir($path,0777,true);
	
	if (isset($_FILES['hlp_pic']['name'])) { 
		if (0 < $_FILES['hlp_pic']['error']) { 
			echo 'Error during file upload' . $_FILES['hlp_pic']['error'];
		} 
		else { 
			if (file_exists('uploads/Help/'. $_FILES['hlp_pic']['name'])){
				$path1 = 'uploads/Help/'. $_FILES['hlp_pic']['name'];
				echo 'File already exists : $path1';
			}
			else {
				move_uploaded_file($_FILES['hlp_pic']['tmp_name'], 'uploads/Help/'. $_FILES['hlp_pic']['name']);
				$path1 = 'uploads/Help/'. $_FILES['hlp_pic']['name'];
				
				$hlp = $con->query("update `start_helping` set `help_title` = '$hlp_title',`help_pic` = '$path1' where help_id = $hlp_id");
				
				//echo "INSERT INTO `project`(`proj_title`,`proj_pic`) VALUES ('$hlp_title','$path1')";
				
				//echo 'File successfully uploaded : uploads/Student/' . $_FILES['stud_pic']['name'];
				if($hlp == 1){
					echo '<script>window.location = "helping_list.php"</script>';	
				}else{
					echo 0;
				}
			} 
		}
	}else{
		echo 'Please choose a file';
	}
}

function delete_help(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from start_helping where help_id IN($ids) ");
    } else {
        $re = $con->query("delete from start_helping ");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function delete_email_template(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("delete from email_tamplate where et_id IN($ids) ");
		if($re == 1){
			echo 1;
		}else{
			echo 0;
		}
	}
}

function send_mail(){
	$site_name = "Books For A Purpose";
    global $con;
	global $site_url, $email_Host, $email_Username, $email_Port, $email_Password, $email_Setemail, $email_Setname, $email_AddReplyTo, $email_AddReplyToname, $our_email;
	$email = $_POST['mail_id']; 					
	$sub = $_POST['mail_sub']; 					
	$msg = $_POST['mail_msg']; 					
						$comment = "";
$comment .='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Registration Active - Diana</title>
		<meta name="viewport" content="width=device-width" />
		<style type="text/css">
			@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
				body[yahoo] .buttonwrapper { background-color: transparent !important; }
				body[yahoo] .button { padding: 0 !important; }
				body[yahoo] .button a { background-color: #f79f17;; padding: 15px 25px !important; }
			} 
			@media only screen and (min-device-width: 601px) {
				.content { width: 600px !important; }
				.col387 { width: 387px !important; }
			}
		</style>
</head>
<body bgcolor="#ffffff" style="margin: 0; padding: 0;" yahoo="fix">
	<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:50%; max-width:600px; border:1px solid #f79f17;" class="content">
		
		<tr>
			<td align="left" bgcolor="#f79f17" style="padding: 20px; color: #fff; font-family: Arial, sans-serif; font-size: 18px; line-height: 30px;text-align:center;">
				Books For A Purpose
			</td>
		</tr>
		<tr>
			<td align="left" bgcolor="#ffffff" style="padding: 20px; color: #666; font-family: Arial, sans-serif; font-size: 13px; line-height: 30px; border-bottom: 1px solid #f79f17;">  
				<b> Dear, '.ucfirst($email).',</b> <br><br>
				<b> About, '.ucfirst($sub).',</b> <br><br>
				<p>'.$msg.'</p>
				Sincerely,<br>
				<p>'.$site_name.'</p>
			</td>
		</tr>
		<tr>
			<td style="padding: 15px 10px 15px 10px;" bgcolor="#f79f17">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">
							<a href="'.$site_url.'" style="color: #fff;text-decoration:none;" target="_blank">'.$site_name.'</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>'; 	
		
	$mail	= new PHPMailer();  
	$mail->SMTPDebug = 0;
	$mail->Host = $email_Host;
	$mail->Port = $email_Port;
	$mail->SMTPSecure = true;
	$mail->SMTPAuth = true;
	$mail->Username   = $email_Username; 
	$mail->Password   = $email_Password; 
	$mail->SetFrom($email_Setemail, $email_Setname);
	$mail->AddReplyTo($email_AddReplyTo, $email_AddReplyToname); 

	$mail->Subject    = $sub;
	$mail->MsgHTML($comment);
	$mail->AddAddress($email); 
	$mail->AddAddress('dondahiren2@gmail.com'); 
	$mail->AddAddress('axisavani1997@gmail.com'); 
	if($mail->Send()) {
		//echo 'Message has been sent';
		echo "<script> window.location = 'dashboard.php';</script>";
	} else {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}


?>