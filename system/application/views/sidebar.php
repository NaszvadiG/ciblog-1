<div id="sidebar">
	<div class="boxtitle" style="margin: 0;">Search The Blog</div>
	<div class="boxcontent">
	<?= form_open('posts/search');?>
	<input type="text" name="query" /> <input type="submit" value="Search" />
	</form>
	</div>
	
	<div class="boxtitle">Tag List</div>
	<div class="boxcontent">
		<div><?=$allTags;?></div>
	</div>
	
	<div class="boxtitle">Recent Posts</div>
	<div class="boxcontent">
	<? foreach ($recentPosts AS $recentPost): ?>
		<div><a href="<?=base_url();?>post/<?=$recentPost->slug;?>"><?=$recentPost->title;?></a></div>
	<? endforeach; ?>
	</div>
	
	<div class="boxtitle">Recent Comments</div>
	<div class="boxcontent">
	<? foreach ($recentComments AS $recentComment): ?>
		<div>On <a href="<?=base_url();?>post/<?=$recentComment->slug;?>"><?=$recentComment->title;?></a> by <?=$recentComment->name;?></div>
	<? endforeach; ?>
	</div>
		
	<div class="boxtitle">Recommended Links</div>
	<div class="boxcontent">
		<div><a href="http://www.ahmetkakici.com">Ahmet Kakıcı</a></div>
		<div><a href="http://www.codeigniter.gen.tr">CodeIgniter Türkiye</a></div>
		<div><a href="http://www.web2py.com">web2py</a></div>
		<div><a href="http://www.ddili.org">D Dili</a></div>
	</div>
	
	<div class="boxtitle">Archives</div>
	<div class="boxcontent">
	<? foreach ($blogArchives AS $blogArchive): ?>
	    <div><a href="<?=base_url();?>archives/view/<?=$blogArchive['link'];?>"><?=$blogArchive['display']?></a></div>
	<? endforeach; ?>
	</div>
	
	<? if ($this->session->userdata('isAdmin')): ?>
	<div class="boxtitle">Administration</div>
	<div class="boxcontent">
		<div><a href="<?=base_url();?>admin">Admin Panel</a></div>
		<div><a href="<?=base_url();?>users/logout">Logout</a></div>
	</div>
	<? endif; ?>
	
  </div>
