# Feedback - Laravel Bundle
A very simple library/bundle for **creating semantic markup for your feedback messages**.

## Using Feedback with Laravel

### Install
You can install Feedback just as you would install any other Laravel package:

1. Require it through Composer. Use: `composer require koalabs/feedback`
2. Now open `app/config/app.php` and add this new item to your `providers` array:

```
Koalabs\Feedback\FeedbackServiceProvider
```

3. Now in the same configuration file add a new item to your aliases array:

```
'Feedback'	=>	'Koalabs\Feedback\Facades\Feedback'
```

That's it.  


### Usage
You have three basic methods for creating feedback messages:

1. ``Feedback::message($text)``, which creates a **neutral message**.
2. ``Feedback::error($text)``, which creates an **error message**.
3. ``Feedback::success($text)``, which creates a **success message**.
4. ``Feedback::update($text)``, which creates an **update message**.
4. ``Feedback::field_error($text)``, which creates an **inline feedback message**. It's good for form validation

#### ``Feedback::message($text)``
Will output this markup:
```html
<div class="feedback">
  <p class="feedback__text">Your text here</p>
</div>
```

#### ``Feedback::error($text)``
Will output this:
```html
<div class="feedback feedback--error">
  <p class="feedback__text">Your text here</p>
</div>
```

#### ``Feedback::success($text)``
Will output this:
```html
<div class="feedback feedback--success">
  <p class="feedback__text">Your text here</p>
</div>
```


#### Styling the feedback messages
You can style the feedback messages any way you want by using the classes.