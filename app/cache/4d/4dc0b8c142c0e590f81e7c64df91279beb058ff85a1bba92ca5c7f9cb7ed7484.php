<?php

/* @bolt/editcontent/_aside.twig */
class __TwigTemplate_656ea5799e7540675efe6a8415ccc186c78771d0d59502c3c42bb0efb2fa98a7 extends Twig_Template
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
        $__internal_800025ac3c5c0f5e845c2834372991b44da57a9ce631ecdc8dd18bfcdfe5fa49 = $this->env->getExtension("native_profiler");
        $__internal_800025ac3c5c0f5e845c2834372991b44da57a9ce631ecdc8dd18bfcdfe5fa49->enter($__internal_800025ac3c5c0f5e845c2834372991b44da57a9ce631ecdc8dd18bfcdfe5fa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside.twig"));

        // line 1
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/editcontent/_aside.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Bolt')->widgets("editcontent_aside_top", "backend");
        echo "

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 7
        echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.actions-one", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </div>

    <div class=\"panel-body\">
        ";
        // line 11
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-save.twig");
        echo "
        ";
        // line 12
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-live-editor.twig");
        echo "
        ";
        // line 13
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-preview.twig");
        echo "
        ";
        // line 14
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-status.twig");
        echo "
        ";
        // line 15
        if (($this->env->getExtension('Bolt')->isAllowed("delete", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())))) {
            // line 16
            echo "            ";
            echo twig_include($this->env, $context, "@bolt/editcontent/_aside-delete.twig");
            echo "
        ";
        }
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Bolt')->widgets("editcontent_aside_middle", "backend");
        echo "

";
        // line 23
        echo $context["panels"]->getchanges($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array()), null)) : (null)));
        echo "

";
        // line 25
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()));
        echo "

";
        // line 27
        echo $context["panels"]->getstack(5);
        echo "

";
        // line 29
        echo $this->env->getExtension('Bolt')->widgets("editcontent_aside_bottom", "backend");
        echo "
";
        
        $__internal_800025ac3c5c0f5e845c2834372991b44da57a9ce631ecdc8dd18bfcdfe5fa49->leave($__internal_800025ac3c5c0f5e845c2834372991b44da57a9ce631ecdc8dd18bfcdfe5fa49_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  85 => 27,  80 => 25,  75 => 23,  70 => 21,  65 => 18,  59 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  34 => 7,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% import '@bolt/_macro/_panels.twig' as panels %}*/
/* */
/* {{ widgets('editcontent_aside_top', 'backend') }}*/
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <i class="fa fa-cog fa-fw"></i> {{ __('contenttypes.generic.actions-one',{'%contenttype%': context.contenttype.slug}) }}*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         {{ include('@bolt/editcontent/_aside-save.twig') }}*/
/*         {{ include('@bolt/editcontent/_aside-live-editor.twig') }}*/
/*         {{ include('@bolt/editcontent/_aside-preview.twig') }}*/
/*         {{ include('@bolt/editcontent/_aside-status.twig') }}*/
/*         {% if isallowed('delete', context.content) and context.content.id is not empty %}*/
/*             {{ include('@bolt/editcontent/_aside-delete.twig') }}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
/* {{ widgets('editcontent_aside_middle', 'backend') }}*/
/* */
/* {{ panels.changes(context.contenttype.slug, context.content.id|default(null)) }}*/
/* */
/* {{ panels.lastmodified(context.contenttype.slug, context.content.id) }}*/
/* */
/* {{ panels.stack(5) }}*/
/* */
/* {{ widgets('editcontent_aside_bottom', 'backend') }}*/
/* */
