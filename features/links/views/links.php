<!-- Forum links -->
<?php
$forum_links = Links::get_forum_links_for_event($id);
if ($forum_links["status"] == Links::OK) {
    $forum_links = $forum_links["values"];
} else {
    $forum_links = array();
}

?>
<div class="row-fluid">
  <legend>Linkek</legend>
  <div class="editable_hidden" style="display:none;">
  <input type="text" placeholder="URL" id="forum_url" name="forum_url" class="input-xxlarge" value="<?php echo isset($forum_url) ? $forum_url : '' ?>" />
  <input type="text" placeholder="Leírás" id="forum_comment" name="forum_comment" class="input-xxlarge" maxlength="100" value="<?php echo isset($forum_comment) ? $forum_comment : ''?>" />
  </br>
  <button  onclick="showForumLink(); return false" class="btn">Link mentése</button>
  </div>
  <table id="forumlinks" class="table table-striped">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody id="forumlinks_table_body">
      <?php
      foreach ($forum_links as $forum_link) {
          $comment = !is_null($forum_link['comment']) ? $forum_link['comment'] : $forum_link['forum_link'];
          echo "<tr class=\"forums-row forum-$forum_link[id]\">";
          echo "<td><a target=\"_blank\" role=\"button\" class=\"btn forum-$forum_link[id]\" href=\"$forum_link[forum_link]\">$comment</a></td>";
          echo "<td><span id=\"forum-$forum_link[id]\" class=\"close editable_hidden\" style=\"display:none\">&times;</span></td>";
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<div class="row-fluid"><br/></div>

