<?php

/* @bolt/dashboard/_suggestloripsum.twig */
class __TwigTemplate_099cbe25270bfee31c58a5d4e9d0dd2e0ba4874ea180b01e65f03c28ed7d4a83 extends Twig_Template
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
        $__internal_a13420656ea73f8ba252b1f962504d03315ebab66f2bdd335ff9165b60c5a128 = $this->env->getExtension("native_profiler");
        $__internal_a13420656ea73f8ba252b1f962504d03315ebab66f2bdd335ff9165b60c5a128->enter($__internal_a13420656ea73f8ba252b1f962504d03315ebab66f2bdd335ff9165b60c5a128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_suggestloripsum.twig"));

        // line 1
        echo "<div class=\"alert alert-info alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    ";
        // line 3
        echo $this->env->getExtension('Bolt')->trans("page.dashboard.empty-database");
        echo "
    ";
        // line 4
        if ($this->env->getExtension('Bolt')->isAllowed("prefill")) {
            // line 5
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("page.dashboard.quickstart", array("%url%" => $this->env->getExtension('routing')->getPath("prefill", array("force" => 1))));
            echo "
    ";
        }
        // line 7
        echo "</div>
";
        
        $__internal_a13420656ea73f8ba252b1f962504d03315ebab66f2bdd335ff9165b60c5a128->leave($__internal_a13420656ea73f8ba252b1f962504d03315ebab66f2bdd335ff9165b60c5a128_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_suggestloripsum.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="alert alert-info alert-dismissible">*/
/*     <button type="button" class="close" data-dismiss="alert">×</button>*/
/*     {{ __("page.dashboard.empty-database") }}*/
/*     {% if isallowed('prefill') %}*/
/*         {{ __("page.dashboard.quickstart", {'%url%': path('prefill', {'force': 1})}) }}*/
/*     {% endif %}*/
/* </div>*/
/* */
