<?php

/* partials/_topbar.twig */
class __TwigTemplate_9b748447db71ac6450e84526c226b089fd6d0b0d578aa07312f6856e26e66869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b493851295580dd4f04b67cf789a3d7f2dc5d5cbdf66c9970b0abf092f3c6d68 = $this->env->getExtension("native_profiler");
        $__internal_b493851295580dd4f04b67cf789a3d7f2dc5d5cbdf66c9970b0abf092f3c6d68->enter($__internal_b493851295580dd4f04b67cf789a3d7f2dc5d5cbdf66c9970b0abf092f3c6d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_topbar.twig"));

        // line 1
        echo "<div class=\"title-bar\" data-responsive-toggle=\"example-menu\" data-hide-for=\"medium\">
  <button class=\"menu-icon\" type=\"button\" data-toggle></button>
  <div class=\"title-bar-title\">Menu</div>
</div>

<div class=\"top-bar\" id=\"example-menu\">
  <div class=\"top-bar-left\">
    ";
        // line 8
        echo $this->env->getExtension('Bolt')->menu($this->env, "", "partials/_sub_menu.twig");
        echo "
  </div>
  <div class=\"top-bar-right\">
    <form method=\"get\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "search\" id=\"searchform-inline\" enctype=\"text/plain\">
      <ul class=\"menu\">
        <li><input type=\"search\" value=\"";
        // line 13
        if (array_key_exists("search", $context)) {
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt')->trans("general.phrase.search-ellipsis");
        echo "\" name=\"search\"></li>
        <li><button type=\"submit\" class=\"button secondary\">";
        // line 14
        echo $this->env->getExtension('Bolt')->trans("general.phrase.search");
        echo "</button></li>
      </ul>
    </form>
  </div>
</div>";
        
        $__internal_b493851295580dd4f04b67cf789a3d7f2dc5d5cbdf66c9970b0abf092f3c6d68->leave($__internal_b493851295580dd4f04b67cf789a3d7f2dc5d5cbdf66c9970b0abf092f3c6d68_prof);

    }

    public function getTemplateName()
    {
        return "partials/_topbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  42 => 13,  37 => 11,  31 => 8,  22 => 1,);
    }
}
/* <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">*/
/*   <button class="menu-icon" type="button" data-toggle></button>*/
/*   <div class="title-bar-title">Menu</div>*/
/* </div>*/
/* */
/* <div class="top-bar" id="example-menu">*/
/*   <div class="top-bar-left">*/
/*     {{ menu(template = 'partials/_sub_menu.twig') }}*/
/*   </div>*/
/*   <div class="top-bar-right">*/
/*     <form method="get" action="{{ paths.root }}search" id="searchform-inline" enctype="text/plain">*/
/*       <ul class="menu">*/
/*         <li><input type="search" value="{% if search is defined %}{{ search|escape }}{% endif %}" placeholder="{{ __('general.phrase.search-ellipsis') }}" name="search"></li>*/
/*         <li><button type="submit" class="button secondary">{{ __('general.phrase.search') }}</button></li>*/
/*       </ul>*/
/*     </form>*/
/*   </div>*/
/* </div>*/
