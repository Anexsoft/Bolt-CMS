<?php

/* @bolt/editcontent/_aside-preview.twig */
class __TwigTemplate_f44fae18c66a9659a77251c9309440f1264f7ee140b28b087a4d59f88c0557e1 extends Twig_Template
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
        $__internal_97fe7e6d7c1e4946e74c0f39b2ac69087caf616ceb92e91ab07bed535c20518b = $this->env->getExtension("native_profiler");
        $__internal_97fe7e6d7c1e4946e74c0f39b2ac69087caf616ceb92e91ab07bed535c20518b->enter($__internal_97fe7e6d7c1e4946e74c0f39b2ac69087caf616ceb92e91ab07bed535c20518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-preview.twig"));

        // line 1
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 2
            echo "<div class=\"btn-group\">
    ";
            // line 3
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 4
                echo "        <button type=\"button\" class=\"btn btn-default\" id=\"sidebarpreviewbutton\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()))), "html", null, true);
                echo "\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt')->trans("general.phrase.preview");
                echo "
        </button>
    ";
            } else {
                // line 8
                echo "        <button type=\"button\" class=\"btn btn-disabled\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 9
                echo $this->env->getExtension('Bolt')->trans("general.phrase.no-preview");
                echo "
        </button>
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 14
                echo "        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> ";
                // line 22
                echo $this->env->getExtension('Bolt')->trans("View (saved version) on site");
                echo "
                </a>
            </li>
        </ul>
    ";
            }
            // line 27
            echo "</div>
";
        }
        
        $__internal_97fe7e6d7c1e4946e74c0f39b2ac69087caf616ceb92e91ab07bed535c20518b->leave($__internal_97fe7e6d7c1e4946e74c0f39b2ac69087caf616ceb92e91ab07bed535c20518b_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  67 => 22,  63 => 21,  54 => 14,  52 => 13,  49 => 12,  43 => 9,  40 => 8,  34 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if not context.contenttype.viewless|default(false) %}{# don't show for viewless contenttypes. #}*/
/* <div class="btn-group">*/
/*     {% if app.routes.get('preview') %}*/
/*         <button type="button" class="btn btn-default" id="sidebarpreviewbutton" data-url="{{ path('preview', {'contenttypeslug': context.contenttype.singular_slug}) }}">*/
/*             <i class="fa fa-external-link-square"></i> {{ __('general.phrase.preview') }}*/
/*         </button>*/
/*     {% else %}*/
/*         <button type="button" class="btn btn-disabled">*/
/*             <i class="fa fa-external-link-square"></i> {{ __('general.phrase.no-preview') }}*/
/*         </button>*/
/*     {% endif %}*/
/* */
/*     {% if context.content.status == "published" and context.content.link is defined %}*/
/*         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*             <span class="caret"></span>*/
/*             <span class="sr-only">Toggle Dropdown</span>*/
/*         </button>*/
/* */
/*         <ul class="dropdown-menu pull-right" role="menu">*/
/*             <li>*/
/*                 <a href="{{ context.content.link }}" target="_blank">*/
/*                     <i class="fa fa-external-link-square"></i> {{ __('View (saved version) on site') }}*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     {% endif %}*/
/* </div>*/
/* {% endif %}*/
/* */
