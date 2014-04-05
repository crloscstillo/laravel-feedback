# Feedback - Laravel Bundle
A very simple library/bundle for **creating semantic markup for your feedback messages**.

## Using Feedback with Laravel

### Install
You can install Feedback in three ways:

- *[Easiest]*  
Use laravel's artisan via the command line: `php artisan bundle:install feedback`
- *[Still, easy]*  
[Download the zip files from github](https://github.com/crlosmify/feedback/zipball/master), unzip them and change the folder name to **feedback**.  
Then copy the folder into your *bundles directory*.
- *[Not really hard but...]*  
cd into your *bundles folder* and use this command: `git clone git@github.com:crlosmify/feedback.git`


That's it.  
Now you need to **activate the bundle**.  
Do this by going into your *application/bundles.php* file and adding this line inside the array:

```
'feedback' => array('auto' => true)
```

That's it.

### Usage
You have three basic methods for creating feedback messages:

1. ``Feedback::message($text)``, which creates a **neutral message**.
2. ``Feedback::error($text)``, which creates an **error message**.
3. ``Feedback::success($text)``, which creates a **success message**.

#### ``Feedback::message($text)``
Will output this markup:
```html
<div class="feedback">
  <p class="feedback-text">Your text here</p>
</div>
```

#### ``Feedback::error($text)``
Will output this:
```html
<div class="feedback error">
  <p class="feedback-text">Your text here</p>
</div>
```

#### ``Feedback::success($text)``
Will output this:
```html
<div class="feedback success">
  <p class="feedback-text">Your text here</p>
</div>
```

You can style your feedback messages however you like by using these classes.  
I made no assumptions about this.

#### Other feedback types
There are also some *hidden helper methods*. These are just extensions of the previous three:

- ``Feedback::added($record)``, which creates a **message for when you add something**.
- ``Feedback::updated($record)``, which creates a **message for update notifications**.
- ``Feedback::deleted($record)``, which creates a default **message when the user deletes something**.
- ``Feedback::field_error($text)`` is great for *inline validation errors*.

#### Styling the feedback messages
You can style the feedback messages any way you want. I made no assumptions about this.  
Nevertheless, i also added a basic example of how you could style it.  
Just publish the files of the bundle to your public directory, like this:

```
php artisan bundle:publish
```
Now look inside the *public/feedback* folder.