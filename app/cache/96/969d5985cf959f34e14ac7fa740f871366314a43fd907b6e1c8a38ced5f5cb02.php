<?php

/* @bolt/editcontent/_aside-status.twig */
class __TwigTemplate_923ed072153482f941e6f996a7f3ec7a00da8aa3c194db5f0ab7386bb346d4ab extends Twig_Template
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
        $__internal_cdb8565c20754b09c908ce7e19a948a499d12c3d3d8d47a62cb2b001ad40ee79 = $this->env->getExtension("native_profiler");
        $__internal_cdb8565c20754b09c908ce7e19a948a499d12c3d3d8d47a62cb2b001ad40ee79->enter($__internal_cdb8565c20754b09c908ce7e19a948a499d12c3d3d8d47a62cb2b001ad40ee79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-status.twig"));

        // line 1
        $context["__internal_6ac3aaf402237c6eaaaf194f9308da5b10a89e207f70874e74b649cd69aae372"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_aside-status.twig", 1);
        // line 2
        echo "
<p>
    ";
        // line 4
        echo $this->env->getExtension('Bolt')->trans("Current (saved) status:");
        echo "
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"";
        // line 5
        echo $this->env->getExtension('Bolt')->trans("general.phrase.change-current-status");
        echo "\">
        <strong>
            <i class=\"fa fa-circle status-";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array()), $this->env->getExtension('Bolt')->trans("general.phrase.none"))) : ($this->env->getExtension('Bolt')->trans("general.phrase.none"))), "html", null, true);
        echo "\"></i>
            ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array"), $this->env->getExtension('Bolt')->trans("general.phrase.none"))) : ($this->env->getExtension('Bolt')->trans("general.phrase.none"))), "html", null, true);
        echo "
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Bolt')->trans("general.phrase.saved-on-colon");
            echo " <strong>";
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
    <small>(";
            // line 16
            echo $context["__internal_6ac3aaf402237c6eaaaf194f9308da5b10a89e207f70874e74b649cd69aae372"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ")</small>
";
        } else {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
";
        }
        // line 20
        echo "</p>
";
        
        $__internal_cdb8565c20754b09c908ce7e19a948a499d12c3d3d8d47a62cb2b001ad40ee79->leave($__internal_cdb8565c20754b09c908ce7e19a948a499d12c3d3d8d47a62cb2b001ad40ee79_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  64 => 18,  59 => 16,  52 => 15,  50 => 14,  41 => 8,  37 => 7,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% from '@bolt/_buic/_moment.twig' import buic_moment %}*/
/* */
/* <p>*/
/*     {{ __("Current (saved) status:") }}*/
/*     <a href="#statusselect" id="lastsavedstatus" title="{{ __('general.phrase.change-current-status') }}">*/
/*         <strong>*/
/*             <i class="fa fa-circle status-{{ context.content.status|default(__('general.phrase.none')) }}"></i>*/
/*             {{ status_names[context.content.status]|default(__('general.phrase.none')) }}*/
/*         </strong>*/
/*     </a>*/
/* </p>*/
/* */
/* <p class="lastsaved">*/
/*     {% if context.content.id is not empty %}*/
/*     {{ __('general.phrase.saved-on-colon') }} <strong>{{ context.content.datechanged|localdate("%c") }}</strong>*/
/*     <small>({{ buic_moment(context.content.datechanged) }})</small>*/
/* {% else %}*/
/*     {{ __('contenttypes.generic.not-saved-yet', {'%contenttype%': context.contenttype.slug}) }}*/
/* {% endif %}*/
/* </p>*/
/* */
