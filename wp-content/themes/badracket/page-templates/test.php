<?php
/**
 * Template Name: test
 * @package   WordPress
 * @subpackage  Starkers
 * @since     Starkers 4.0
 */
?>


<?php get_template_part('parts/clusters/page-bootstrap-top'); ?>

  <div class="main">



        <h1>Carousel</h1>


        <div id="myCarousel" class="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
                <img src="http://placekitten.com/800/400" alt="">
                <div class="carousel-caption">
                  <h4>Third Thumbnail label</h4>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            <div class="item"><img src="http://placekitten.com/850/400" alt=""></div>
            <div class="item"><img src="http://placekitten.com/825/400" alt=""></div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>



        <h1>Heading 1</h1>
        <p>
            Lorem ipsum <em>emphasised text</em> dolor sit amet, <strong>strong text</strong> consectetur adipisicing elit, <abbr title="">abbreviated text</abbr> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut <q>quoted text</q> enim ad minim veniam, quis nostrud exercitation <a href="#">link text</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute <ins>inserted text</ins> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <code>code text</code> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <h2>Heading 2</h2>
        <p>
            Suspendisse rhoncus, est ac sollicitudin viverra, leo orci sagittis massa, sed condimentum est tortor a lectus. Curabitur porta feugiat ullamcorper. Integer lacinia mi id odio faucibus eget tincidunt nisl iaculis. Nam adipiscing hendrerit turpis, et porttitor felis sollicitudin et. Donec dictum massa ac neque accumsan tempor. Cras aliquam, ipsum sit amet laoreet hendrerit, purus <del>deleted text</del> sapien convallis dui, et porta leo ipsum ac nunc. Nullam ornare porta dui ac semper. Cras aliquam laoreet hendrerit. Quisque vulputate dolor eget mi porta vel porta nisl pretium. Vivamus non leo magna, quis imperdiet risus. Morbi tempor risus placerat tellus imperdiet fringilla.
        </p>
        <blockquote>
            <p>
                I am not one who was born in the possession of knowledge; I am one who is fond of antiquity, and earnest in seeking it there.
            </p>
        </blockquote>


        <h1>Inuit Stuff</h1>

        <p>Block list</p>
        <ul class="block-list">
           <li>Foo</li>
           <li>Bar</li>
           <li>Baz</li>
           <li><a href=# class=block-list__link>Foo Bar Baz</a></li>
        </ul>

        <p>Breadcrumb</p>
        <ol class="nav  breadcrumb">
            <li><a href=#>Home</a></li>
            <li><a href=#>About</a></li>
            <li><a href=#>The Board</a></li>
            <li class=current><a href=#>Directors</a></li>
        </ol>


        <ol class="nav  breadcrumb--path">
            <li class=breadcrumb__root><a href=#>inuit.css</a></li>
            <li><a href=#>inuit.css</a></li>
            <li><a href=#>partials</a></li>
            <li class=current><a href=#>objects</a></li>
        </ol>


        <ol class="nav  breadcrumb">
            <li><a href=#>Home</a></li>
            <li data-breadcrumb="|"><a href=#>About</a></li>
            <li data-breadcrumb="|"><a href=#>The Board</a></li>
            <li data-breadcrumb="|" class=current><a href=#>Directors</a></li>
        </ol>


        <p>Island</p>


        <div class=island>
            I am boxed off.
        </div>'

        

        <p>Rules</p>

        <hr class="rule">

        <hr class="rule rule--dotted">

        <hr class="rul rule--dashed">

        <hr class="rule rule--ornament">


 


        <p>Gray Box</p>
        <ul class="nav  nav--fit  nav--block  greybox">
            <li><a href=#>Home</a></li>
            <li><a href=#>About</a></li>
            <li><a href=#>Portfolio</a></li>
            <li><a href=#>Contact</a></li>
        </ul>



        <p>Pill</p>
          <p>This <span class=pill>here</span> is a pill!</p>
          <p>This <span class=loz>here</span> is also a lozenge!</p>
        <p>


        <p>Matrix</p>

        <ul class="matrix  three-cols">
            <li class=all-cols>Lorem</li>
            <li>Ipsum <a href=#>dolor</a></li>
            <li><a href=# class=matrix__link>Sit</a></li>
            <li>Amet</li>
            <li class=all-cols>Consectetuer</li>
        </ul>


        <ul class="multi-list  four-cols">
            <li>Lorem</li>
            <li>Ipsum</li>
            <li>Dolor</li>
            <li>Sit</li>
        </ul>


        <p>Media</p>


        <div class=media>
            <img src=http://placekitten.com/200/300 alt="" class=media__img>
            <p class=media__body>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>


        <p>Nav</p>


        <ul class='nav nav--fit'>
            <li><a href=#>Home</a></li>
            <li><a href=#>About</a></li>
            <li><a href=#>Portfolio</a></li>
            <li><a href=#>Contact</a></li>
        </ul>


        <p>Options</p>

        <ul class="nav  options">
            <li><a>ha</a></li>
            <li><a>ho</a></li>
            <li><a>bar</a></li>
            <li><a>baz</a></li>
         </ul>


         <p>Pagination</p>

        
        <ol class="nav  pagination">
            <li class=pagination__first>First</li>
            <li class=pagination__prev>Previous</li>
            <li><a href=/page/1>1</a></li>
            <li><a href=/page/2>2</a></li>
            <li class=current><a href=/page/3>3</a></li>
            <li><a href=/page/4>4</a></li>
            <li><a href=/page/5>5</a></li>
            <li class=pagination__next><a href=/page/next>Next</a></li>
            <li class=pagination__last><a href=/page/last>Last</a></li>
        </ol>


        <p>Split</p>

        <dl class=split>
            <dt class=split__title>Burger and fries</dt>
            <dd>&pound;5.99</dd>
            <dt class=split__title>Fillet steak</dt>
            <dd>&pound;19.99</dd>
            <dt class=split__title>Ice cream</dt>
            <dd>&pound;2.99</dd>
        </dl>


        <ol class="split  results">
            <li class=first><b class=split__title>1st place</b> Bob</li>
            <li class=second><b class=split__title>2nd place</b> Lilly</li>
            <li class=third><b class=split__title>3rd place</b> Ted</li>
        </ol>​


        <p>Stats</p>


        <div class=stat-group>
            <dl class=stat>
                <dt class=stat__title>Tweets</dt>
                <dd class=stat__value>27,740</dd>
            </dl>

            <dl class=stat>
                <dt class=stat__title>Following</dt>
                <dd class=stat__value>11,529</dd>
            </dl>

            <dl class=stat>
                <dt class=stat__title>Followers</dt>
                <dd class=stat__value>12,105</dd>
            </dl>
        </div>


        <p>This or this</p>


        <h1 class=this-or-this>
            <a href=# class="this-or-this__this  two-fifths">
                Free
            </a>
            <span class="this-or-this__or  one-fifth">
                or
            </span>
            <a href=# class="this-or-this__this  two-fifths">
                Pro
            </a>
        </h1>



            <cite><a href="#">Confucius, The Confucian Analects</a></cite>, (551 BC - 479 BC)
        </p>
        <hr class="rule">
        <p>
            Extended paragraph. <a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <ol>
            <li>Unus</li>
            <li>Duo</li>
            <li>Tres</li>
            <li>Quattuor</li>
        </ol>
        <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <h3>Header 3</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <h4>Unordered lists</h4>
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipisicing elit</li>
            <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
            <li>Ut enim ad minim veniam</li>
        </ul>
        <p>
            Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
    <pre><code>
    body
    {
        background-color : #fff;
                   color : #111;
                    font : 0.8125em/1.618 sans-serif;
    }
    </code></pre>
        <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <h4>Header 4</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <h5>Header 5</h5>
        
        <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        
        <h6>Header 6</h6>
        
        <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        
        <dl>
            <dt>Definition list</dt>
            <dd>
                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </dd>
            <dt>Lorem ipsum dolor sit amet</dt>
            <dd>
                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </dd>
        </dl>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <h4>Ordered list</h4>
        <ol>
            <li>List item</li>
            <li>List item</li>
            <li>List item
            <ol>
                <li>List item level 2</li>
                <li>List item level 2
                <ol>
                    <li>List item level 3</li>
                    <li>List item level 3</li>
                </ol>
                </li>
            </ol>
            </li>
        </ol>
        <h4>Unordered list</h4>
        <ul>
            <li>List item 01</li>
            <li>List item 02</li>
            <li>List item 03
            <ul>
                <li>List item level 2</li>
                <li>List item level 2
                <ul>
                    <li>List item level 3</li>
                    <li>List item level 3</li>
                </ul>
                </li>
            </ul>
            </li>
        </ul>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <h4>Tables</h4>
        <table>
        <caption>Jimi Hendrix - Albums</caption>
        <thead>
        <tr>
            <th>
                Album
            </th>
            <th>
                Year
            </th>
            <th>
                Price
            </th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td>
                Album
            </td>
            <td>
                Year
            </td>
            <td>
                Price
            </td>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td>
                Are You Experienced
            </td>
            <td>
                1967
            </td>
            <td>
                $10.00
            </td>
        </tr>
        <tr>
            <td>
                Axis: Bold as Love
            </td>
            <td>
                1967
            </td>
            <td>
                $12.00
            </td>
        </tr>
        <tr>
            <td>
                Electric Ladyland
            </td>
            <td>
                1968
            </td>
            <td>
                $10.00
            </td>
        </tr>
        <tr>
            <td>
                Band of Gypsys
            </td>
            <td>
                1970
            </td>
            <td>
                $12.00
            </td>
        </tr>
        <tbody>
        </table>
        <p>
             I am <a href="#">the a tag</a> example<br>
             I am <abbr title="test">the abbr tag</abbr> example<br>
             I am <b>the b tag</b> example<br>
             I am <cite>the cite tag</cite> example<br>
             I am <code>the code tag</code> example<br>
             I am <del>the del tag</del> example<br>
             I am <dfn>the dfn tag</dfn> example<br>
             I am <em>the em tag</em> example<br>
             I am <i>the i tag</i> example<br>
             I am <ins>the ins tag</ins> example<br>
             I am <kbd>the kbd tag</kbd> example<br>
             I am <q>the q tag <q>inside</q> a q tag</q> example<br>
             I am <s>the s tag</s> example<br>
             I am <samp>the samp tag</samp> example<br>
             I am <small>the small tag</small> example<br>
             I am <span>the span tag</span> example<br>
             I am <strong>the strong tag</strong> example<br>
             I am <sub>the sub tag</sub> example<br>
             I am <sup>the sup tag</sup> example<br>
             I am <var>the var tag</var> example<br>
             I am <u>the u tag</u> example
        </p>
        <form method="post" action="#">
            <fieldset>
                <legend>Form</legend>
                <label for="Name">Name:</label>
                <input tabindex="1" id="Name" type="text" name="Name"><br>
                <label for="City">City:</label>
                <input tabindex="2" id="City" type="text" name="City"><br>
                <label for="Email">Email:</label>
                <input tabindex="3" id="Email" type="text" name="Email"><br>
                <label for="Message">Message:</label>
                <textarea tabindex="4" id="Message" name="Message" rows="20" cols="20"></textarea><br>
                <label for="Lorem">Message:</label>
                <select tabindex="5" id="Lorem" name="Lorem ipsum">
                    <option selected="selected" value="1">Lorem ipsum</option>
                    <option value="2">Dolor sit amet</option>
                    <option value="3">Consectetuer adipiscing</option>
                    <option value="4">Vitae diam</option>
                    <option value="5">Vestibulum ornare</option>
                </select>
                <br>
                <label for="Pellentesque">Pellentesque habitant:</label>
                <select tabindex="6" id="Pellentesque" size="1" name="select">
                    <optgroup label="Lorem ipsum 1">
                    <option selected="selected" value="1">Nunc urna nulla</option>
                    <option value="2">Ultrices sit amet</option>
                    <option value="3">Cursus faucibus</option>
                    <option value="4">Tincidunt pellentesque</option>
                    <option value="5">Ante</option>
                    </optgroup>
                    <optgroup label="Lorem ipsum 2">
                    <option value="6">Nunc ac diam</option>
                    <option value="7">Donec orci risus</option>
                    <option value="8">Malesuada quis</option>
                    <option value="9">Vulputate eu</option>
                    <option value="10">Lacinia in</option>
                    </optgroup>
                </select>
                <br>
                <br>
                <label>Lorem ipsum 1:</label>
                <input tabindex="7" type="radio" name="radioSet" value="uno">Uno<br>
                <label>&nbsp;</label><input tabindex="8" type="radio" name="radioSet" value="due">Due<br>
                <label>&nbsp;</label><input tabindex="9" type="radio" name="radioSet" value="tre">Tre<br>
                <br>
                <label>Lorem ipsum 2:</label><input tabindex="10" type="checkbox" name="checkSet" value="one">One<br>
                <label>&nbsp;</label><input tabindex="11" type="checkbox" name="checkSet" value="two">Two<br>
                <label>&nbsp;</label><input tabindex="12" type="checkbox" name="checkSet" value="three">Three<br>
                <br>
                <input tabindex="13" type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
        <h3>What is Lorem ipsum?</h3>
        <p>
            <b>Lorem ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem ipsum.
        </p>
        <hr>
        <p>
            <strong>This</strong> Lorem ipsum HTML example is created from the parts of Placeholder Markup with Lorem ipsum - Jon Tan, Emastic CSS Framework, Formy CSS Framework, Tripoli CSS Framework and Baseline CSS Framework.
        </p>
        <address>Address: Somewhere, World</address>
    </div>

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Source+Sans+Pro::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

<?php get_template_part('parts/clusters/page-bootstrap-bottom'); ?>

