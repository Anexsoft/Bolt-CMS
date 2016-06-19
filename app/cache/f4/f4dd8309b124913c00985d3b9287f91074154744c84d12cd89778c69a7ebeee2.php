<?php

/* @bolt/editcontent/_aside-live-editor.twig */
class __TwigTemplate_d62c29d4a88467f45cb5ba837a1b665da5691804e06ffd05493a3fa7aeb6ad35 extends Twig_Template
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
        $__internal_5cb47fd0f99b2937c5a8cfcb24c8189a147d1fcc50449838077fdb383a07ba6b = $this->env->getExtension("native_profiler");
        $__internal_5cb47fd0f99b2937c5a8cfcb24c8189a147d1fcc50449838077fdb383a07ba6b->enter($__internal_5cb47fd0f99b2937c5a8cfcb24c8189a147d1fcc50449838077fdb383a07ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_aside-live-editor.twig"));

        // line 1
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"btn-group hidden-xs\">
    <button type=\"button\" class=\"btn btn-secondary\" id=\"sidebar-live-editor-button\">
        <i class=\"fa fa-pencil\"></i> ";
            // line 4
            echo $this->env->getExtension('Bolt')->trans("general.phrase.live-edit");
            echo "
    </button>
</div>
";
        }
        
        $__internal_5cb47fd0f99b2937c5a8cfcb24c8189a147d1fcc50449838077fdb383a07ba6b->leave($__internal_5cb47fd0f99b2937c5a8cfcb24c8189a147d1fcc50449838077fdb383a07ba6b_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}{# don't show for viewless contenttypes. #}*/
/* <div class="btn-group hidden-xs">*/
/*     <button type="button" class="btn btn-secondary" id="sidebar-live-editor-button">*/
/*         <i class="fa fa-pencil"></i> {{ __('general.phrase.live-edit') }}*/
/*     </button>*/
/* </div>*/
/* {% endif %}*/
/* */
