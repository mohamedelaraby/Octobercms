<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\dashboard\developer\octobercms/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_cf09cb4611d2f56000cbe77e4ba969f684da57754d764ce5ec2e6a4420dc65bd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>Contact us</h1>

<form>
  <div class=\"form-group\">
    <label for=\"email\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"email@example.com\">
    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
  </div>


  <div class=\"form-group\">
    <label for=\"password\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"Password\" placeholder=\"password\">
  </div>

  <div class=\"form-group\">
    <label for=\"message\">message</label>
    <textarea type=\"text\" class=\"form-control\" id=\"message\" placeholder=\"message\"></textarea>
  </div>


  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\dashboard\\developer\\octobercms/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Contact us</h1>

<form>
  <div class=\"form-group\">
    <label for=\"email\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"email@example.com\">
    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
  </div>


  <div class=\"form-group\">
    <label for=\"password\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"Password\" placeholder=\"password\">
  </div>

  <div class=\"form-group\">
    <label for=\"message\">message</label>
    <textarea type=\"text\" class=\"form-control\" id=\"message\" placeholder=\"message\"></textarea>
  </div>


  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>", "C:\\xampp\\htdocs\\dashboard\\developer\\octobercms/themes/responsiv-clean/pages/contact.htm", "");
    }
}
