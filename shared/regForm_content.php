<form id="regForm" method="post" 
<?php

  if(_CURRENT_PAGE == 'company') {
    echo 'action="company.php'._LINK_PARAMS.'#regForm" ';
  } else {
    echo 'action="faq.php'._LINK_PARAMS.'#regForm" ';
  }
?>
      accept-charset="UTF-8"
      style="padding:10px 150px 10px 10px; text-align: justify; /*max-height: 357px; overflow: scroll;*/ overflow-x:hidden; ">
  <table>
    <tr>
      <td>
        <strong><?php echo ""._NAME;?>*</strong>
      </td>
      <td>
        <input type="text" name="navn" size="25" <?php if ($posting) echo 'value="' . $navn . '"'; ?> />
      </td>
    </tr>
    <?php
    if ($posting && !$navn) {
      echo '
    <tr>
      <td>&nbsp;</td>
      <td class="error">'._NAME.' '._IS_REQUIRED.'</td>
    </tr>';
    }
    ?>
    <tr>
      <td>
        <strong><?php echo ""._EMAIL;?>*</strong>
      </td>
      <td>
        <input type="text" name="email" size="25" <?php if ($posting) echo 'value="' . $email . '"'; ?> />
      </td>
    </tr>
    <?php
    if ($posting && !$email) {
      echo '
    <tr>
      <td>&nbsp;</td>
      <td class="error">'._EMAIL.' '._IS_REQUIRED.'</td>
    </tr>';
    }
    ?>

    <?php
    if(_CURRENT_PAGE == 'company') {
      ?>

      <tr>
        <td>
          <strong><?php echo ""._TEL;?>*</strong>
        </td>
        <td>
          <input type="text" name="tlf" size="25" <?php if ($posting) echo 'value="' . $tlf . '"'; ?> />
        </td>
      </tr>
      <?php
    if ($posting && !$tlf) {
      echo '
    <tr>
      <td>&nbsp;</td>
      <td class="error">'._TEL.' '._IS_REQUIRED.'</td>
    </tr>';
    }
    ?>
      <tr>
        <td>
          <strong><?php echo ""._COMPANY_NAME;?>*
          </strong>
        </td>
        <td>
          <input type="text" name="foretak" size="25" <?php if ($posting) echo 'value="' . $foretak . '"'; ?> />
        </td>
      </tr>
      <?php
    if ($posting && !$foretak) {
      echo '
    <tr>
      <td>&nbsp;</td>
      <td class="error">'._COMPANY_NAME.' '._IS_REQUIRED.'</td>
    </tr>';
    }
    ?>
      <tr>
        <td>
          <strong><?php echo ""._CITY;?>: </strong>
        </td>
        <td>
          <input type="text" name="poststed" size="25" <?php if ($posting) echo 'value="' . $poststed . '"'; ?> />

        </td>
      </tr>
      <tr>
        <td>
          <strong><?php echo ""._DISPOSAL_SYSTEM;?>:</strong>
        </td>
        <td>
          <input type="text" name="kassasystem" size="25" <?php if ($posting) echo 'value="' . $kassasystem . '"'; ?> />

        </td>
      </tr>

      <?php
    }
    ?>

    <tr>
      <td>
        <strong><?php
    if(_CURRENT_PAGE == 'company') {
      echo ""._COMMENTS;
    } else {
      echo ""._QUESTION;
    }
    ?>:</strong>
      </td>
      <td>
        <textarea name="kommentar" rows="6" cols="20" <?php if ($posting) echo 'value="' . $kommentar . '"'; ?>></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" name="submit" style="margin-left: 80px; cursor: pointer;" value="<?php echo ""._SEND_REQUEST;?>" class="inputButton gradient"/>
      </td>
    </tr>
  </table>
</form>


