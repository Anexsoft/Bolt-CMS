<?php

/* @bolt/editcontent/fielddata/_taxonomy.twig */
class __TwigTemplate_7e9771f4105ce840312a919018a8a46f0aa045a1dc8e9ac377d7d13fd887e1e6 extends Twig_Template
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
        $__internal_4797bc680930fcaa9cc14477a56d063b17dc6f62a37bb9409c38b3ee86e5672e = $this->env->getExtension("native_profiler");
        $__internal_4797bc680930fcaa9cc14477a56d063b17dc6f62a37bb9409c38b3ee86e5672e->enter($__internal_4797bc680930fcaa9cc14477a56d063b17dc6f62a37bb9409c38b3ee86e5672e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fielddata/_taxonomy.twig"));

        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.categories.text.placeholder", $this->env->getExtension('Bolt')->trans("(no category)")), "html", null, true);
        echo "
";
        
        $__internal_4797bc680930fcaa9cc14477a56d063b17dc6f62a37bb9409c38b3ee86e5672e->leave($__internal_4797bc680930fcaa9cc14477a56d063b17dc6f62a37bb9409c38b3ee86e5672e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_taxonomy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }
}
/* {### Messages ###}*/
/* */
/* {{ data('field.categories.text.placeholder', __('(no category)')) }}*/
/* */
