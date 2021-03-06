<div class="unit size1of4 sidebar">
<?= form_open('posts/search');?>
<input class="sidebar-input" type="text" name="query" /> <input type="submit" value="Search" />
</form>

<div class="box-title">About</div>
<div class="box-content">
<div>Mengu, is a web developer with <a href="http://www.rubyonrails.org">Ruby on Rails</a>,
<a href="http://www.djangoproject.com">Django</a>, <a href="http://www.pylonshq.com/">Pylons</a>, <a href="http://www.web2py.com">web2py</a>,
<a href="http://www.codeigniter.com">CodeIgniter</a> and <a href="http://www.jquery.com">jQuery</a> in his tool box.
Available for any kind of web development jobs. <a href="<?=base_url();?>pages/about">Read more</a>..</div>
</div>

<div class="box-title">Tag List</div>
<div class="box-content">
<div><?=$allTags;?></div>
</div>

<div class="box-title">Recent Posts</div>
<div class="box-content">
<? foreach ($recentPosts AS $recentPost): ?>
    <div class="recent-post"><a href="<?=base_url();?>post/<?=$recentPost->slug;?>"><?=$recentPost->title;?></a></div>
<? endforeach; ?>
</div>

<div class="box-title">Recent Comments</div>
<div class="box-content">
<? foreach ($recentComments AS $recentComment): ?>
    <div class="recent-comment"><?=$recentComment->name;?> on <a href="<?=base_url();?>post/<?=$recentComment->slug?>#comments"><?=$recentComment->title;?></a></div>
<? endforeach; ?>
</div>

<div class="box-title">Open Source Projects</div>
<div class="box-content">
    <div><a href="http://github.com/mengu/ciblog">CiBlog</a></div>
    <div><a href="http://github.com/mengu/ideabox">IdeaBox</a></div>
    <div><a href="http://github.com/mengu/expensii">Expensii</a></div>
    <div><a href="https://github.com/mengu/DesktopOrganizer">Desktop Organizer</a></div>
</div>

<div class="box-title">Recommended Links</div>
<div class="box-content">
<div><a target="_blank" href="http://www.pylonshq.com">Pylons</a></div>
<div><a target="_blank" href="http://www.web2py.com">web2py</a></div>
<div><a target="_blank" href="http://dev.pocoo.org">Pocoo</a></div>
<div><a target="_blank" href="http://www.rubyonrails.com">Ruby on Rails</a></div>
<div><a target="_blank" href="http://www.djangoproject.com">Django</a></div>
<div><a target="_blank" href="http://www.jquery.com">jQuery</a></div>
<div><a target="_blank" href="http://www.codeigniter.gen.tr">CodeIgniter Türkiye</a></div>
<div><a target="_blank" href="http://www.ahmetkakici.com">Ahmet Kakıcı</a></div>
<div><a target="_blank" href="http://www.berkerpeksag.com">Berker Peksağ</a></div>
<div><a target="_blank" href="http://hosaf.org/node">hoşaf</a></div>
<div><a target="_blank" href="http://thadeusb.com">ThadeusB</a></div>
<div><a target="_blank" href="http://www.codecommit.com/blog/">Code Commit</a></div>
</div>

<div class="box-title">Blog Archives</div>
<div class="box-content">
<? foreach ($blogArchives AS $blogArchive): ?>
    <div><a href="<?=base_url();?>archives/view/<?=$blogArchive['link'];?>"><?=$blogArchive['display']?></a></div>
<? endforeach; ?>
</div>

<div class="box-title">Recently Enjoyed</div>
<div class="box-content recent-tracks">
<? if (is_array($recentTracks)): ?>
<? foreach($recentTracks AS $recentTrack): ?>
    <div><a href="<?= $recentTrack['link'] ?>"><?= $recentTrack['title'] ?></a></div>
<? endforeach; ?>
<?  else: ?>
	<div>Cannot fetch the latest listened songs right now.</div>
<? endif; ?>
</div>

<? if ($this->session->userdata('isAdmin')): ?>
<div class="box-title">Administration</div>
<div class="box-content">
    <div><a href="<?=base_url();?>admin">Admin Panel</a></div>
    <div><a href="<?=base_url();?>users/logout">Logout</a></div>
</div>
<? endif; ?>

</div>
