<?php /* Smarty version Smarty-3.1.16, created on 2017-03-18 10:09:57
         compiled from "\xampp\htdocs\brainak\\views\templates\admin\workshop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557258ccf95c63b3f5-69013730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '701776d2c188b479a3d0ae6f2417bef6a83c65f2' => 
    array (
      0 => '\\xampp\\htdocs\\brainak\\\\views\\templates\\admin\\workshop.tpl',
      1 => 1489828196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557258ccf95c63b3f5-69013730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58ccf95c698ff4_28231713',
  'variables' => 
  array (
    'showMsg' => 0,
    'projects_rslt' => 0,
    'content_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ccf95c698ff4_28231713')) {function content_58ccf95c698ff4_28231713($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\brainak\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   

	<script type="text/javascript">
    function confirm_delete() {
      return confirm('are you sure?');
    }
    </script>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2></h2>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Brainak Experts</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      <li><span ><a href="add-workshop.php" class="btn btn-primary" style="text-decoration:none; font-size:18px">Add New </a></span></li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                	<?php if ($_smarty_tpl->tpl_vars['showMsg']->value!='') {?>
                    	<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['showMsg']->value;?>
</div>
                    <?php }?>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table">
                        <thead>
                          <tr class="headings">
                            	<th >S.No</th>
                                <th >College Name</th>
                                <th >UnderTaken By</th>
                                <th >Vist Date</th>
                                <th >Specification</th>
                                <th >Amount</th>
                                <th >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php  $_smarty_tpl->tpl_vars['content_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects_rslt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->key => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['content_name']['iteration']++;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['content_name']['iteration'];?>
</td>
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['content_item']->value['project_name'], 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['content_item']->value['lname'];?>
</td>
                         
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['duration'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['total_cost'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['content_item']->value['month_committed'];?>
</td>
                         
                           
                             <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['content_item']->value['added_date']);?>
</td>
                            
                          	<td>
                                <a class="btn btn-info" href="add-projects.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
" title="Edit">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Edit
                                </a>
                              <!-- 	<a class="btn btn-danger" href="projects.php?id=<?php echo $_smarty_tpl->tpl_vars['content_item']->value['id'];?>
&action=delete" onclick="return confirm_delete('Are you sure want to delete this?');" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        Remove
                               	</a>-->
                                
                           </td>
                        </tr>
                        <?php }
if (!$_smarty_tpl->tpl_vars['content_item']->_loop) {
?>
                        <tr>
                            <td colspan="10" style="text-align:center; color:red;">No record found...!</td>
                        </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
