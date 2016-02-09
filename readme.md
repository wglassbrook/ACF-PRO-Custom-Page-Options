#ACF Pro - Custom Page Options  

## An example use of Flexible Content Fields  

---
**"What's this now?"**  

This is code that I'm constantly reiterating and updating on numerous sites I develope. Note exactly a "one-size-fits-all" solution but this particular occurance may be the most extensive version I use.

**"Yeah, ok, but what is it?"**  

Phew! Well that's kinda hard to explain. WordPress has a nifty plugin known as Advanced Custom Fields. Also known as ACF. I'm partial to the Pro version of ACF which adds additional fields in which to play with. One of these if the Flexible Content Field. This field allows you to use repeatable patterns of content throughout your site.

While ACF's documentation and help forum is extensive, at first glance, it's a bit hard to tell exactly how to use this field. Now, this is in no way the best or only way to use this field type. It's here for reference to myself or anyone as to one way in which it can be applied to a project.

**"Keen! How do I use it?"**  

Well, that's another thing. You may not be able to use it at all. It's really dependant on your project. As it's written at the moment, it's meant to be applied to a theme using Bootstrap and has a lot of Bootstrap dependant classes and design patterns. That being said, I have used a very similar set of code on a Fondation 4 based WP theme several times in the past.

Let me drop the basics on you. To begin, I place the `acf_options.php` file and the `acf_options` folder into a `/lib` or `/includes` folder in the root of my theme. Make sure to edit the `$template_location` variable in the `acf_options.php` file to reflect the correct directory.

Then I import the `acf-field-group-export.json` file through ACF's import interface.

I've also included some custom styles that pertain to these particular elements in the `acf-options-styles.css` file. Import these into your own project if you'd like to use them. 

That should be about it. Your mileage may vary.