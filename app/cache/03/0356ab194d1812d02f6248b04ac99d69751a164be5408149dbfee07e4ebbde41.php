<?php

/* @bolt/editcontent/_buttons.twig */
class __TwigTemplate_673734b374b3a222ea238522b8ab8c6e20abb8bfeb01f9016aa4d9c836d91e7a extends Twig_Template
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
        $__internal_57ede49bfb1a757f2795eafd9c3551dacd25d3a6c517f4256e73fbb430318be9 = $this->env->getExtension("native_profiler");
        $__internal_57ede49bfb1a757f2795eafd9c3551dacd25d3a6c517f4256e73fbb430318be9->enter($__internal_57ede49bfb1a757f2795eafd9c3551dacd25d3a6c517f4256e73fbb430318be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_buttons.twig"));

        // line 1
        $context["__internal_e4aed07c85574c0337d059c2eb7f64cde2e829d53d440c174f90cf3a7d8ab8f0"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_buttons.twig", 1);
        // line 2
        echo "
<div class=\"form-group hidden-xs\">
    <div class=\"col-xs-12\">

        ";
        // line 7
        echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\">
                <i class=\"fa fa-flag\"></i> ";
        // line 9
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
            </button>
            ";
        // line 12
        echo "            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savebutton\">
                        <i class=\"fa fa-flag\"></i> ";
        // line 19
        echo $this->env->getExtension('Bolt')->trans("general.phrase.save-and-return-overview");
        echo "
                    </button>
                </li>
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savenewbutton\">
                        <i class=\"fa fa-flag\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt')->trans("general.phrase.save-and-create-new-record");
        echo "
                    </button>
                </li>
            </ul>
        </div>

        ";
        // line 31
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 32
            echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-secondary\" id=\"live-editor-button\">
                    <i class=\"fa fa-pencil\"></i> ";
            // line 34
            echo $this->env->getExtension('Bolt')->trans("general.phrase.live-edit");
            echo "
                </button>
            </div>
        ";
        }
        // line 38
        echo "
        ";
        // line 40
        echo "        ";
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 41
            echo "            <div class=\"btn-group\">
                ";
            // line 42
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 43
                echo "                    <button type=\"button\" class=\"btn btn-default\" id=\"previewbutton\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()))), "html", null, true);
                echo "\">
                        <i class=\"fa fa-external-link-square\"></i> ";
                // line 44
                echo $this->env->getExtension('Bolt')->trans("general.phrase.preview");
                echo "
                    </button>
                ";
            } else {
                // line 47
                echo "                    <button type=\"button\" class=\"btn btn-disabled\">
                        <i class=\"fa fa-external-link-square\"></i> ";
                // line 48
                echo $this->env->getExtension('Bolt')->trans("general.phrase.no-preview");
                echo "
                    </button>
                ";
            }
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 54
                echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
                // line 61
                echo $this->env->getExtension('Bolt')->trans("View (saved version) on site");
                echo "
                            </a>
                        </li>
                    </ul>
                ";
            }
            // line 66
            echo "            </div>
        ";
        }
        // line 68
        echo "
        ";
        // line 70
        echo "        <p class=\"lastsaved form-control-static\">
            ";
        // line 71
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) {
            // line 72
            echo "                ";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.saved-on-colon");
            echo "
                <strong>";
            // line 73
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
                <small>(";
            // line 74
            echo $context["__internal_e4aed07c85574c0337d059c2eb7f64cde2e829d53d440c174f90cf3a7d8ab8f0"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ")</small>
            ";
        } else {
            // line 76
            echo "                ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
            ";
        }
        // line 78
        echo "        </p>

    </div>

</div>
";
        
        $__internal_57ede49bfb1a757f2795eafd9c3551dacd25d3a6c517f4256e73fbb430318be9->leave($__internal_57ede49bfb1a757f2795eafd9c3551dacd25d3a6c517f4256e73fbb430318be9_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 78,  162 => 76,  157 => 74,  153 => 73,  148 => 72,  146 => 71,  143 => 70,  140 => 68,  136 => 66,  128 => 61,  124 => 60,  116 => 54,  113 => 53,  110 => 51,  104 => 48,  101 => 47,  95 => 44,  90 => 43,  88 => 42,  85 => 41,  82 => 40,  79 => 38,  72 => 34,  68 => 32,  65 => 31,  56 => 24,  48 => 19,  39 => 12,  34 => 9,  30 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/* */
/* <div class="form-group hidden-xs">*/
/*     <div class="col-xs-12">*/
/* */
/*         {# Save Contentype #}*/
/*         <div class="btn-group">*/
/*             <button type="button" class="btn btn-primary" id="savecontinuebutton">*/
/*                 <i class="fa fa-flag"></i> {{ __('contenttypes.generic.save', {'%contenttype%': context.contenttype.slug}) }}*/
/*             </button>*/
/*             {# Dropdown #}*/
/*             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">*/
/*                 <span class="caret"></span>*/
/*                 <span class="sr-only">Toggle Dropdown</span>*/
/*             </button>*/
/*             <ul class="dropdown-menu" role="menu">*/
/*                 <li>*/
/*                     <button type="submit" class="btn btn-link" id="savebutton">*/
/*                         <i class="fa fa-flag"></i> {{ __('general.phrase.save-and-return-overview') }}*/
/*                     </button>*/
/*                 </li>*/
/*                 <li>*/
/*                     <button type="submit" class="btn btn-link" id="savenewbutton">*/
/*                         <i class="fa fa-flag"></i> {{ __('general.phrase.save-and-create-new-record') }}*/
/*                     </button>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*         {# Live Edit #}*/
/*         {% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}*/
/*             <div class="btn-group">*/
/*                 <button type="button" class="btn btn-secondary" id="live-editor-button">*/
/*                     <i class="fa fa-pencil"></i> {{ __('general.phrase.live-edit') }}*/
/*                 </button>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {# Preview (Don't show for viewless contenttypes.) #}*/
/*         {% if not context.contenttype.viewless|default(false) %}*/
/*             <div class="btn-group">*/
/*                 {% if app.routes.get('preview') %}*/
/*                     <button type="button" class="btn btn-default" id="previewbutton" data-url="{{ path('preview', {'contenttypeslug': context.contenttype.singular_slug}) }}">*/
/*                         <i class="fa fa-external-link-square"></i> {{ __('general.phrase.preview') }}*/
/*                     </button>*/
/*                 {% else %}*/
/*                     <button type="button" class="btn btn-disabled">*/
/*                         <i class="fa fa-external-link-square"></i> {{ __('general.phrase.no-preview') }}*/
/*                     </button>*/
/*                 {% endif %}*/
/* */
/*                 {# Dropdown #}*/
/*                 {% if context.content.status == "published" and context.content.link is defined %}*/
/*                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                         <span class="caret"></span>*/
/*                         <span class="sr-only">Toggle Dropdown</span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                         <li>*/
/*                             <a href="{{ context.content.link }}" target="_blank">*/
/*                                 <i class="fa fa-external-link-square"></i> {{ __('View (saved version) on site') }}*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {# Last saved #}*/
/*         <p class="lastsaved form-control-static">*/
/*             {% if context.content.id != 0 %}*/
/*                 {{ __('general.phrase.saved-on-colon') }}*/
/*                 <strong>{{ context.content.datechanged|localdate("%c") }}</strong>*/
/*                 <small>({{ buic_moment(context.content.datechanged) }})</small>*/
/*             {% else %}*/
/*                 {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.slug}) }}*/
/*             {% endif %}*/
/*         </p>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
