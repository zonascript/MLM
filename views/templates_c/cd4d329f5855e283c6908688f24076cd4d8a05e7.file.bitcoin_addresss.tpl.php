<?php /* Smarty version Smarty-3.1.16, created on 2017-09-06 12:22:43
         compiled from "\xampp\htdocs\MLM\\views\templates\admin\bitcoin_addresss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171559aa7856cdcca0-12798338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4d329f5855e283c6908688f24076cd4d8a05e7' => 
    array (
      0 => '\\xampp\\htdocs\\MLM\\\\views\\templates\\admin\\bitcoin_addresss.tpl',
      1 => 1504693362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171559aa7856cdcca0-12798338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59aa7856d05c45_66168937',
  'variables' => 
  array (
    'bitcoin_details' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa7856d05c45_66168937')) {function content_59aa7856d05c45_66168937($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h2></h2>
              </div>
             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bitcoin Address</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                	
                  <div class="x_content">
                    <div class="col-md-8">
                    <form method="post">
                    	<div class="col-md-4 padset" ><input type="radio" name ="bitcoin_type" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='blockchain') {?>checked<?php }?> value="blockchain" />&nbsp;&nbsp;<img src="../admin/img/blockchain.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="coinbase" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='coinbase') {?>checked<?php }?> />&nbsp;&nbsp;<img src="../admin/img/coinbase.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitcoincoid" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='bitcoincoid') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/bitcoincoid.png" /></div>
                        
                        <div class="col-md-4 padset" ><input type="radio" name ="bitcoin_type" value="zebpay" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='zebpay') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/zebpay.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitpay" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='bitpay') {?>checked<?php }?> />&nbsp;&nbsp;<img src="../admin/img/bitpay.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitsquare" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='bitsquare') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/bitsquare.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="bitfinex" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='bitfinex') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/bitfinex.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="cex" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='cex') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/cex.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="copay" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='copay') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/copay.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="localbitcoin" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='localbitcoin') {?>checked<?php }?> />&nbsp;&nbsp;<img src="../admin/img/localbitcoin.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="luno"<?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='luno') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/luno.png" /></div>
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="poloniex" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='poloniex') {?>checked<?php }?> />&nbsp;&nbsp;<img src="../admin/img/poloniex.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="remitano" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='remitano') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/remitano.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="xapo"  <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='xapo') {?>checked<?php }?> />&nbsp;&nbsp;<img src="../admin/img/xapo.png" /></div>
                        
                        <div class="col-md-4 padset"><input type="radio" name ="bitcoin_type" value="btccom" <?php if ($_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_type']=='btccom') {?>checked<?php }?>  />&nbsp;&nbsp;<img src="../admin/img/btccom.png" /></div>
                        <div class="col-md-8 "><input class="col-md-8" type="text" value="<?php echo $_smarty_tpl->tpl_vars['bitcoin_details']->value['bitcoin_address'];?>
" name="bitcoin_address"  placeholder="Bitcoin Address" /></div><div class="clearfix"></div>
                        <div class="col-md-3 " style="margin-top:10px"><input class="col-md-8 btn btn-primary" type="submit" name="bitadd_btn"  value="Update" /></div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       
       <style>
       .padset{margin:10px 0; padding:10px; border:1px solid #eee}
       </style>
       <?php }} ?>
