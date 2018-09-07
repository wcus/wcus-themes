## Header Widget Area 1

### WCUS Logo
Use an `Image` widget with a custom size. Visible on all pages. 

### WCUS Ticket Button
Use a `Custom HTML` widget visible on all pages with the following:

```
<a href="#" class="wcus-button">Get Your Tickets Now!</a>
```

### WCUS Intro Text
Use a `Text` widget visible on the homepage to enter content

### WCUS Social Icons
Use a `Custom HTML` widget visible only on the homepage with the following code:

```
<a href="https://www.facebook.com/WordCampUSA/" target="_blank" class="wcus-social-button wcus-social-button--facebook">Facebook</a>
<a href="https://twitter.com/WordCampUS" target="_blank" class="wcus-social-button wcus-social-button--twitter">Twitter</a>
<a href="https://www.instagram.com/wordcampus/" target="_blank" class="wcus-social-button wcus-social-button--instagram">Instagram</a>
```

### Jetpack Subscription
Use the `Blog Subscriptions (Jetpack)` widget. Visible only on the homepage.

## Before Content (Homepage) Area 1 

### 4 Columns of Linked Images with Text
In a `Text` widget wrap 4 images with captions in `div.wcus-practical-info`. Caption becomes text overlay.

```
<!-- Practical info callouts must be wrapped in div.wcus-practical-info -->
<div class="wcus-practical-info">

[caption id="attachment_1000" align="alignnone" width="536"]<a href="http://google.com"><img class="size-full wp-image-1000" src="https://2018.wcus.wpengine.com/wp-content/uploads/sites/2/2018/07/practical-info.jpg" alt="" width="536" height="370" /></a> Practical Info[/caption]

[caption id="attachment_1001" align="alignnone" width="536"]<a href="http://google.com"><img class="size-full wp-image-1001" src="https://2018.wcus.wpengine.com/wp-content/uploads/sites/2/2018/07/location.jpg" alt="Location" width="536" height="372" /></a> Location[/caption]

[caption id="attachment_1002" align="alignnone" width="536"]<a href="http://google.com"><img class="wp-image-1002 size-full" src="https://2018.wcus.wpengine.com/wp-content/uploads/sites/2/2018/07/sponsors.jpg" alt="Sponsors" width="536" height="368" /></a> Sponsors[/caption]

[caption id="attachment_1003" align="alignnone" width="536"]<a href="http://google.com"><img class="size-full wp-image-1003" src="https://2018.wcus.wpengine.com/wp-content/uploads/sites/2/2018/07/contributor-day.jpg" alt="" width="536" height="368" /></a> Contributor Day[/caption]

</div>
```

### Narrow Width with Logo Text Widget
In a `Text` widget, wrap an H2 and image with `div.wcus-textwidget-narrow`. Right align the image.

```
<!-- narrow-width-with-logo text widget -->
<div class="wcus-textwidget-narrow">
<h2>WCUS: WE HOPE TO SEE YOU IN 2018 IN NASHVILLE</h2>
<img class="size-thumbnail wp-image-1009 alignright" src="https://2018.wcus.wpengine.com/wp-content/uploads/sites/2/2018/07/wordpress-logo-150x150.png" alt="" width="150" height="150" />We hope everyone had a great time at WCUS this year. Videos of the sessions are currently being uploaded to WordPress TV. There are over 500 photos on our Facebook Page. We hope to see you all back in Nashville again 2018.

</div>
```

### 2 Column Callout Section
In a `Custom HTML` widget add the following:

```
<div class="wcus-calls">
	<div class="wcus-callout">
		<a href="/speakers">
			<img class="alignnone wp-image-3421 size-full" src="https://2018.us.wordcamp.org/files/2018/09/speakers-call.jpg" alt="" width="1080" height="706" srcset="https://2018.us.wordcamp.org/files/2018/09/speakers-call.jpg 1080w, https://2018.us.wordcamp.org/files/2018/09/speakers-call-300x196.jpg 300w, https://2018.us.wordcamp.org/files/2018/09/speakers-call-768x502.jpg 768w, https://2018.us.wordcamp.org/files/2018/09/speakers-call-1024x669.jpg 1024w, https://2018.us.wordcamp.org/files/2018/09/speakers-call-459x300.jpg 459w" sizes="(max-width: 1080px) 100vw, 1080px">
			<div class="wcus-callout-title">
				<h3>
					Speakers Call
				</h3>
			</div>
		</a>
	</div>
	<div class="wcus-callout">
		<a href="/volunteers">
			<img class="alignnone wp-image-3420 size-full" src="https://2018.us.wordcamp.org/files/2018/09/volunteers-call.jpg" alt="" width="1080" height="706" srcset="https://2018.us.wordcamp.org/files/2018/09/volunteers-call.jpg 1080w, https://2018.us.wordcamp.org/files/2018/09/volunteers-call-300x196.jpg 300w, https://2018.us.wordcamp.org/files/2018/09/volunteers-call-768x502.jpg 768w, https://2018.us.wordcamp.org/files/2018/09/volunteers-call-1024x669.jpg 1024w, https://2018.us.wordcamp.org/files/2018/09/volunteers-call-459x300.jpg 459w" sizes="(max-width: 1080px) 100vw, 1080px">
			<div class="wcus-callout-title">
				<h3>
					Volunteers Call
				</h3>
			</div>
		</a>
	</div>
</div>
```

## Footer Widget Area 1

### Sponsors
Use the `Sponsors` widget.

## Footer Widget Area 2

### Footer Widget Social Markup

```
<div class="wcus-footer-social">
	<div class="wcus-footer-logo">
		<a href="/">
            <!-- SVG code of logo -->
        </a>
	</div>
    <div class="wcus-footer-icons">
        <div>
            <p>On social media, use <span class="wcus-footer-hashtag"><a href="https://twitter.com/search?vertical=default&q=%23WCUS&src=typd">#WCUS</a></span></p>
            <div class="wcus-social-buttons">
                <a href="https://www.facebook.com/WordCampUSA/" class="wcus-social-button wcus-social-button--facebook">Facebook</a>
                <a href="https://twitter.com/WordCampUS" class="wcus-social-button wcus-social-button--twitter">Twitter</a>
                <a href="https://www.instagram.com/wordcampus/" class="wcus-social-button wcus-social-button--instagram">Instagram</a>
            </div>
        </div>
    </div>
</div>
```

### Blog Subscription
Use the `Blog Subscriptions (Jetpack)` widget.