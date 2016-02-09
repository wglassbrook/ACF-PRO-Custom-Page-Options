#ACF Pro - Custom Page Options  

## An example use of Flexible Content Fields  

---
**"What's this now?"**  

This is code that I'm constantly reiterating and updating on numerous sites I develop. Note exactly a "one-size-fits-all" solution but this particular occurrence may be the most extensive version I use.

**"Yeah, ok, but what is it?"**  

Phew! Well that's kinda hard to explain. WordPress has a nifty plugin known as Advanced Custom Fields. Also known as ACF. I'm partial to the Pro version of ACF which adds additional fields in which to play with. One of these if the Flexible Content Field. This field allows you to use repeatable patterns of content throughout your site.

While ACF's documentation and help forum is extensive, at first glance, it's a bit hard to tell exactly how to use this field. Now, this is in no way the best or only way to use this field type. It's here for reference to myself or anyone as to one way in which it can be applied to a project.

**"Keen! How do I use it?"**  

Well, that's another thing. You may not be able to use it at all. It's really dependent on your project. As it's written at the moment, it's meant to be applied to a theme using Bootstrap and has a lot of Bootstrap dependent classes and design patterns. That being said, I have used a very similar set of code on a Foundation 4 based WP theme several times in the past. Peal the code apart and it should be pretty simple to see how you would/could modify it for your needs.

Let me drop the basics on you. To begin, I place the `acf_options.php` file and the `cf_options` folder into a `/lib` or `/includes` folder in the root of my theme. Make sure to edit the `$template_location` variable in the `cf_options.php` file to reflect the correct directory.

Then I import the `acf-field-group-export.json` file through ACF's import interface. I've also included the exported field group as a php file (`acf-field-group-export.php`) you could use in your `functions.php` file. I don't particularly like this method because it makes it more difficult to make changes to the fields. 

I've also included some custom styles that pertain to these particular elements in the `cf-options-styles.css` file. Import these into your own project if you'd like to use them. 

That should be about it. Your mileage may vary.