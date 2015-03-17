# Yii2 Code Prettify

Code syntax highlighting based on **[Google-Code-Prettify](https://github.com/tcollard/google-code-prettify)**.


## Installation


### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-code-prettify "dev-master"
```

or add

```
"uran1980/yii2-code-prettify": "dev-master"
```

to the require section of your ```composer.json```


## Usage

To use this component add dependency to you project asset bundle.
 For example in ```...\frontend\assets\AppAsset.php``` file add to dependency:

```php
<?php

namespace frontend\assets;

class AppAsset extends \yii\web\AssetBundle
{
    ...
    public $depends = [
        ...
        'uran1980\yii\assets\codePrettify\CodePrettifyAsset',
    ];
}
```

That's it. In the View add source code blocks like this:

```html
<pre class="prettyprint">
&lt;script type="text/javascript"&gt;
    // Say hello world until the user starts questioning
    // the meaningfulness of their existence.
    function helloWorld(world) {
      for (var i = 42; --i &gt;= 0;) {
        alert('Hello ' + String(world));
      }
    }
&lt;/script&gt;
&lt;style&gt;
    p { color: pink }
    b { color: blue }
    u { color: "umber" }
&lt;/style&gt;
</pre>


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)
