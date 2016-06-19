<?php

/* @bolt/editcontent/_live-editor.twig */
class __TwigTemplate_9ae1c2f012315466fde286673f9aeb42fea71916e5d3b8e71413de353979a5c9 extends Twig_Template
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
        $__internal_ea58e53b4724f457fd44e8c027aa1471f13bad1fa6c26766564303eca08be22c = $this->env->getExtension("native_profiler");
        $__internal_ea58e53b4724f457fd44e8c027aa1471f13bad1fa6c26766564303eca08be22c->enter($__internal_ea58e53b4724f457fd44e8c027aa1471f13bad1fa6c26766564303eca08be22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/_live-editor.twig"));

        // line 1
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"live-editor\">
    <iframe id=\"live-editor-iframe\" name=\"live-editor-iframe\"></iframe>
</div>
";
        }
        
        $__internal_ea58e53b4724f457fd44e8c027aa1471f13bad1fa6c26766564303eca08be22c->leave($__internal_ea58e53b4724f457fd44e8c027aa1471f13bad1fa6c26766564303eca08be22c_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% if context.contenttype.liveeditor is not defined or context.contenttype.liveeditor %}{# don't show for viewless contenttypes. #}*/
/* <div class="live-editor">*/
/*     <iframe id="live-editor-iframe" name="live-editor-iframe"></iframe>*/
/* </div>*/
/* {% endif %}*/
/* */
