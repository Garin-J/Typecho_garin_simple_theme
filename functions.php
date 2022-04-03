<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {







    $motto= new Typecho_Widget_Helper_Form_Element_Text('motto', NULL, NULL, _t('座右铭'), _t('本模板img下,avatar.jpg,座右铭可不填写~'));
    $form->addInput($motto);


    $qq= new Typecho_Widget_Helper_Form_Element_Text('qq', NULL, NULL, _t('QQ号'), _t('只填qq,可不填写~'));
    $form->addInput($qq);


    $email= new Typecho_Widget_Helper_Form_Element_Text('email', NULL, NULL, _t('邮箱'), _t('只填邮箱,可不填写~'));
    $form->addInput($email);

    $github= new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('GitHub'), _t('链接,可不填写~'));
    $form->addInput($github);

    $csdn= new Typecho_Widget_Helper_Form_Element_Text('csdn', NULL, NULL, _t('CSDN'), _t('链接,没有csdn官方logo用字母版权c代替,可不填写~'));
    $form->addInput($csdn);








    $bilibili= new Typecho_Widget_Helper_Form_Element_Text('bilibili', NULL, NULL, _t('哔哩哔哩'), _t('链接,可不填写~'));
    $form->addInput($bilibili);

    $icp= new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, NULL, _t('网站备案号'), _t('可不填写~'));
    $form->addInput($icp);

    $gongan= new Typecho_Widget_Helper_Form_Element_Text('gongan', NULL, NULL, _t('公安备案号'), _t('可不填写~'));
    $form->addInput($gongan);


    $code= new Typecho_Widget_Helper_Form_Element_Text('code', NULL, NULL, _t('统计代码'), _t('可不填写~'));
    $form->addInput($code);


}
