<?php

/* @bolt/components/panel-activity.twig */
class __TwigTemplate_8e01c1f9742df55000198f44549f7f40668e3ce435f25a27184fdd3a72637b24 extends Twig_Template
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
        $__internal_6fb100017f1678f790700f0f134725a02b8b7e1495713914a670a95615397b0e = $this->env->getExtension("native_profiler");
        $__internal_6fb100017f1678f790700f0f134725a02b8b7e1495713914a670a95615397b0e->enter($__internal_6fb100017f1678f790700f0f134725a02b8b7e1495713914a670a95615397b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-activity.twig"));

        // line 5
        echo twig_include($this->env, $context, "@bolt/components/panel-activity-change.twig", (isset($context["context"]) ? $context["context"] : null));
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "@bolt/components/panel-activity-system.twig", (isset($context["context"]) ? $context["context"] : null));
        echo "
";
        
        $__internal_6fb100017f1678f790700f0f134725a02b8b7e1495713914a670a95615397b0e->leave($__internal_6fb100017f1678f790700f0f134725a02b8b7e1495713914a670a95615397b0e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,);
    }
}
/* {##*/
/*  # Sidebar-Panel: Displays the latest activity*/
/*  # (Usage Example: Dashboards sidebar)*/
/*  #}*/
/* {{ include('@bolt/components/panel-activity-change.twig', context) }}*/
/* {{ include('@bolt/components/panel-activity-system.twig', context) }}*/
/* */
