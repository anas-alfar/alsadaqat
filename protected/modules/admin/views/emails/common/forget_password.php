<?php //$this->renderPartial('/mail/common/_email_template_header', array()); ?>
<table>
    <tr>
        <td colspan="5" style="line-height: 18px; width:100%; border-bottom: 1px solid black;border-top: 1px solid black; padding-bottom:20px; padding-top:20px;">
            <!-- arabic -->
                <p style="color:#3D495A; text-align: right;">عزيزي <?php echo $model->fullname; ?></p>
                <p style="color:#3D495A; text-align: right;">شكراً لك على المشاركة في برنامج الصدقات</p>
                <p style="color:#3D495A; text-align: right;">تشير سجلاتنا بأنك قمت بتقديم طلب لإعادة تعيين كلمة المرور الخاصة بحسابك. يرجى إستخدام الرابط أدناه لتأكيد طلبك وإعادة تعيين كلمة المرور الخاصة بك.</p>
                <p style="color:#3D495A; text-align: right;"><?php echo Yii::app()->createAbsoluteUrl( '/admin/default/resetpassword', array( 'token' => $model->perishable_token, 'lang' => 'ar' ) ); ?></p>
                <?php //$this->renderPartial('/mail/common/_contact_ar', array()); ?>
            <!-- end arabic -->
        </td>
    </tr>
    <tr>
        <!-- english -->
        <td  colspan="5" style="line-height: 18px; width:100%;  padding-top:20px;">
            <!-- english -->
                <p style="color:#3D495A;">Dear <?php echo $model->fullname; ?></p>
                <p style="color:#3D495A;">Thank you for participating in Alsadaqat.com platform.</p>
                <p style="color:#3D495A;">Our records indicate that a request to reset your password has been made on your account. Please use the link below to confirm the request and reset your password.</p>
                <p style="color:#3D495A; text-align: right;"><?php echo Yii::app()->createAbsoluteUrl( '/admin/default/resetpassword', array( 'token' => $model->perishable_token, 'lang' => 'en' ) ); ?></p>
                <?php //$this->renderPartial('/mail/common/_contact_en', array()); ?>
            <!-- end english -->
        </td>
        <!-- left-column -->
        
        <!-- right-column -->
    </tr>
</table>
<?php //$this->renderPartial('/mail/common/_email_template_footer', array()); ?>