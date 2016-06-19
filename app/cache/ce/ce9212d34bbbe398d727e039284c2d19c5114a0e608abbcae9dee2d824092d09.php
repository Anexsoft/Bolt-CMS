<?php

/* @bolt/editcontent/fielddata/_templateselect.twig */
class __TwigTemplate_b4a57af901cf80d620f77a61d039b36103911e495500c1fb43d8bf075f35a6d9 extends Twig_Template
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
        $__internal_c182ab994250c5ff49acc96980beebbdc48eff957303e91994f9f2eee35c7c26 = $this->env->getExtension("native_profiler");
        $__internal_c182ab994250c5ff49acc96980beebbdc48eff957303e91994f9f2eee35c7c26->enter($__internal_c182ab994250c5ff49acc96980beebbdc48eff957303e91994f9f2eee35c7c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/editcontent/fielddata/_templateselect.twig"));

        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.templateselect.template.warning", "<strong>%STATUS%:</strong> %MESSAGE%"), "html", null, true);
        echo "

";
        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.templateselect.message.change", $this->env->getExtension('Bolt')->trans("general.phrase.warning-template")), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.templateselect.message.warning", $this->env->getExtension('Bolt')->trans("general.phrase.warning-templatefields-loss")), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.templateselect.message.status", $this->env->getExtension('Bolt')->trans("general.phrase.warning")), "html", null, true);
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("field.templateselect.text.default", $this->env->getExtension('Bolt')->trans("(default template)")), "html", null, true);
        echo "
";
        
        $__internal_c182ab994250c5ff49acc96980beebbdc48eff957303e91994f9f2eee35c7c26->leave($__internal_c182ab994250c5ff49acc96980beebbdc48eff957303e91994f9f2eee35c7c26_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 9,  37 => 8,  33 => 7,  30 => 6,  25 => 3,  22 => 2,);
    }
}
/* {### Template ###}*/
/* */
/* {{ data('field.templateselect.template.warning', '<strong>%STATUS%:</strong> %MESSAGE%') }}*/
/* */
/* {### Messages ###}*/
/* */
/* {{ data('field.templateselect.message.change',  __('general.phrase.warning-template')) }}*/
/* {{ data('field.templateselect.message.warning', __('general.phrase.warning-templatefields-loss')) }}*/
/* {{ data('field.templateselect.message.status',  __('general.phrase.warning')) }}*/
/* {{ data('field.templateselect.text.default',    __('(default template)')) }}*/
/* */
