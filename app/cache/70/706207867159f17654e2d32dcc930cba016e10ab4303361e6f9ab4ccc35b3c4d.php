<?php

/* listing.twig */
class __TwigTemplate_14b6dc7017fa4d24f0dce76f53eeec60850eeed466522ffc5038ee48890f3976 extends Twig_Template
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
        $__internal_d495f0f7df684da779f0c3603575d9b7ebdf2db74aab8ff399be932706a95c8f = $this->env->getExtension("native_profiler");
        $__internal_d495f0f7df684da779f0c3603575d9b7ebdf2db74aab8ff399be932706a95c8f->enter($__internal_d495f0f7df684da779f0c3603575d9b7ebdf2db74aab8ff399be932706a95c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listing.twig"));

        // line 1
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["records"]) ? $context["records"] : null));
        
        $__internal_d495f0f7df684da779f0c3603575d9b7ebdf2db74aab8ff399be932706a95c8f->leave($__internal_d495f0f7df684da779f0c3603575d9b7ebdf2db74aab8ff399be932706a95c8f_prof);

    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ dump(records) }}*/
