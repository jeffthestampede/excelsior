<?php
#**************************************************************************
#  openSIS is a free student information system for public and non-public
#  schools from Open Solutions for Education, Inc. web: www.os4ed.com
#
#  openSIS is  web-based, open source, and comes packed with features that
#  include student demographic info, scheduling, grade book, attendance,
#  report cards, eligibility, transcripts, parent portal,
#  student portal and more.
#
#  Visit the openSIS web site at http://www.opensis.com to learn more.
#  If you have question regarding this system or the license, please send
#  an email to info@os4ed.com.
#
#  This program is released under the terms of the GNU General Public License as
#  published by the Free Software Foundation, version 2 of the License.
#  See license.txt.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  You should have received a copy of the GNU General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
#
#***************************************************************************************
if(($_REQUEST['month_values'] ||$_REQUEST['day_values']||$_REQUEST['year_values']) || $_REQUEST['values'] && ($_POST['values'] || $_REQUEST['ajax']))
{

    if($_REQUEST['month_values'] && $_REQUEST['day_values'] && $_REQUEST['year_values']){

foreach($_REQUEST['year_values'] as $year_each_key=>$year_each_value ){
    foreach($year_each_value as $key=>$value){
	if($value){
	$_REQUEST['values'][$year_each_key][$key]=$value;
    }
	}
}
foreach($_REQUEST['month_values'] as $month_each_key=>$month_each_value ){
    foreach($month_each_value as $key=>$value){
    if($value){
	$_REQUEST['values'][$month_each_key][$key].="-".$value;
    }
	}
}
foreach($_REQUEST['day_values'] as $day_each_key=>$day_each_value ){
    foreach($day_each_value as $key=>$value){
	if($value){
  $_REQUEST['values'][$day_each_key][$key].="-".$value;
    }
	}
}


foreach($_REQUEST['year_values'] as $year_each_key=>$year_each_value ){

    foreach($year_each_value as $key=>$value){
	if($value){
    $_REQUEST['values'][$year_each_key][$key]=date("Y-m-d",strtotime($_REQUEST['values'][$year_each_key][$key]));
	 }
    
    }
}

    
    }


	if($_REQUEST['values'])
	{
		if($_REQUEST['certification_id'])
		{

                foreach($_REQUEST['values'] as $cert_id=>$cert_value){
					
					
                    if($cert_id && $cert_id!='new' ){

                   $sql = "UPDATE staff_certification  SET ";

       foreach($cert_value as $column=>$value)
			{
				if(!is_array($value))
					$sql .= $column."='".str_replace("\'","''",$value)."',";
				else
				{
					$sql .= $column."='||";
					foreach($value as $val)
					{
						if($val)
							$sql .= str_replace('&quot;','"',$val).'||';
					}
					$sql .= "',";
				}

                        }
                        $sql = substr($sql,0,-1) . " WHERE STAFF_CERTIFICATION_ID='$cert_id'";

			DBQuery($sql);

                    }else if($cert_id=='new' && $cert_value['STAFF_CERTIFICATION_NAME']){


                        $sql = "INSERT INTO staff_certification ";
			$fields = 'STAFF_ID,';
			$values = "'".UserStaffID()."',";
       foreach($cert_value as $column=>$value)
			{
				if($value)
				{
					$fields .= $column.',';

					$values .= "'".str_replace("\'","''",$value)."',";
				}
			}
			$sql .= '(' . substr($fields,0,-1) . ') values(' . substr($values,0,-1) . ')';

			DBQuery($sql);

               $id=DBGet(DBQuery("select max(staff_certification_id) as CERTIFICATION_ID  from staff_certification"));
                              $id=$id[1]['CERTIFICATION_ID'];
                              $_REQUEST['certification_id'] = $id;




                    }

                }
                    

		}
		
	}

        unset($_REQUEST['modfunc']);
	unset($_REQUEST['values']);
}



if($_REQUEST['modfunc']=='remove' && !$_REQUEST['delete_ok'])
{

$a=DeletePromptStaffCert('Certificate') ;


}
if($_REQUEST['delete_ok']=='1')
{
        DBQuery("DELETE FROM staff_certification WHERE STAFF_CERTIFICATION_ID=".$_REQUEST['certification_id']);
        unset($_REQUEST['modfunc']);
}
        
if(!$_REQUEST['modfunc'])
{

   if($_REQUEST['certification_id']!='' && $_REQUEST['certification_id']!='new'){


        $this_certification_RET = DBGet(DBQuery("SELECT * FROM staff_certification
        WHERE STAFF_ID=".UserStaffID()));
        $this_certification=$this_certification_RET[1];

   }


	
		$sql = "SELECT STAFF_CERTIFICATION_ID AS ID,STAFF_ID,STAFF_CERTIFICATION_DATE,STAFF_CERTIFICATION_EXPIRY_DATE,
        STAFF_CERTIFICATION_CODE,STAFF_CERTIFICATION_SHORT_NAME,STAFF_CERTIFICATION_NAME,
        STAFF_PRIMARY_CERTIFICATION_INDICATOR,STAFF_CERTIFICATION_DESCRIPTION FROM staff_certification
        WHERE  STAFF_ID=".UserStaffID();
		
	$QI = DBQuery($sql);
$cert_RET = DBGet($QI,array(  'STAFF_CERTIFICATION_NAME'=>'_makeTextInput'
                                     ,'STAFF_CERTIFICATION_CODE'=>'_makeTextInput'
                                     ,'STAFF_CERTIFICATION_SHORT_NAME'=>'_makeTextInput'
                                     ,'STAFF_PRIMARY_CERTIFICATION_INDICATOR'=>'_makeSelectInput'
                                     ,'STAFF_CERTIFICATION_DESCRIPTION'=>'_makeContentInput'));
$counter_for_date=0;
foreach($cert_RET as $ci=>$cd)
{
    $counter_for_date=$counter_for_date+1;
    $cert_RET[$ci]['STAFF_CERTIFICATION_DATE']=_makeDate($cd['STAFF_CERTIFICATION_DATE'],'STAFF_CERTIFICATION_DATE',$counter_for_date,$cd['ID']);
    $counter_for_date=$counter_for_date+1;
    $cert_RET[$ci]['STAFF_CERTIFICATION_EXPIRY_DATE']=_makeDate($cd['STAFF_CERTIFICATION_EXPIRY_DATE'],'STAFF_CERTIFICATION_EXPIRY_DATE',$counter_for_date,$cd['ID']);
}
echo '<input type=hidden id=no_date_fields value='.($counter_for_date==0?$counter_for_date:$counter_for_date-1).'>';
echo '<input type=hidden name=error_handler valuue="">';

	$columns = array('STAFF_CERTIFICATION_NAME'=>'Certification Name','STAFF_CERTIFICATION_CODE'=>'Certification Code','STAFF_CERTIFICATION_DATE'=>'Certification Date','STAFF_CERTIFICATION_SHORT_NAME'=>'Certification Short Name','STAFF_PRIMARY_CERTIFICATION_INDICATOR'=>'Primary Certification Indicator',
            
            'STAFF_CERTIFICATION_EXPIRY_DATE'=>'Certification Expiry Date',
            
            'STAFF_CERTIFICATION_DESCRIPTION'=>'Certification Description');

	$link['add']['html'] = array('STAFF_CERTIFICATION_NAME'=>_makeTextInput('','STAFF_CERTIFICATION_NAME'),'STAFF_CERTIFICATION_CODE'=>_makeTextInput('','STAFF_CERTIFICATION_CODE'), 'STAFF_CERTIFICATION_DATE'=>_makeDate('','STAFF_CERTIFICATION_DATE',$counter_for_date+1),
            'STAFF_CERTIFICATION_SHORT_NAME'=>_makeTextInput('','STAFF_CERTIFICATION_SHORT_NAME'),'STAFF_PRIMARY_CERTIFICATION_INDICATOR'=>_makeSelectInput('','STAFF_PRIMARY_CERTIFICATION_INDICATOR'),
            
              'STAFF_CERTIFICATION_EXPIRY_DATE'=>_makeDate('','STAFF_CERTIFICATION_EXPIRY_DATE',$counter_for_date+2),
            
            'STAFF_CERTIFICATION_DESCRIPTION'=>_makeContentInput('','STAFF_CERTIFICATION_DESCRIPTION'));

        
        $link['remove']['link'] = "Modules.php?modname=$_REQUEST[modname]&include=$_REQUEST[include]&category_id=$_REQUEST[category_id]&modfunc=remove";
	$link['remove']['variables'] = array('id'=>'ID');
        
	
	ListOutputStaffCert($cert_RET,$columns,'Certificate','Certificates',$link);


}

function _makeTextInput($value,$name)
{	global $THIS_RET;

	if($THIS_RET['ID'])
		$id = $THIS_RET['ID'];
	else
		$id = 'new';

	if($name!='TITLE')
		$extra = 'size=32 class=cell_floating';
		else 
		$extra = 'size=32 class=cell_floating';

	return TextInput($name=='TITLE' && $THIS_RET['EXPIRED']?array($value,'<FONT class=red>'.$value.'</FONT>'):$value,"values[$id][$name]",'',$extra);
}

function _makeDate($value,$column='STAFF_CERTIFICATION_DATE',$counter=0,$id='new')
{
    return DateInputAY($value, 'values[' . $id . '][' . $column . ']', $counter);       
}

function _makeContentInput($value,$name)
{	global $THIS_RET;

	if($THIS_RET['ID'])
		$id = $THIS_RET['ID'];
	else
		$id = 'new';

	return TextareaInput($value,"values[$id][$name]",'','rows=4 cols=120');
}

function _makeSelectInput($value,$name)
{	global $THIS_RET;

	if($THIS_RET['ID'])
		$id = $THIS_RET['ID'];
	else
		$id = 'new';

	return SelectInput($value,'values['.$id.']['.$name.']','',array('N'=>'No','Y'=>'Yes'),'N/A');
}
?>

