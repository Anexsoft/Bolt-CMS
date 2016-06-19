<?php

/* @bolt/_sub/_record_list_data.twig */
class __TwigTemplate_8121fca5754825c6884677c246341e681694e5ecd154fe7bda20af5a25e77e42 extends Twig_Template
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
        $__internal_e437fd0ab4d01308a36a8385e1a384210db6641c4b06b191de3dba4ffcf970ab = $this->env->getExtension("native_profiler");
        $__internal_e437fd0ab4d01308a36a8385e1a384210db6641c4b06b191de3dba4ffcf970ab->enter($__internal_e437fd0ab4d01308a36a8385e1a384210db6641c4b06b191de3dba4ffcf970ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_record_list_data.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.confirm.one", $this->env->getExtension('Bolt')->trans("Are you sure you want to do this for 1 record?")), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.confirm.multi", $this->env->getExtension('Bolt')->trans("Are you sure you want to do this for %NUMBER% records?")), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.confirm.no-undo", $this->env->getExtension('Bolt')->trans("general.phrase.no-undo")), "html", null, true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.action.cancel", $this->env->getExtension('Bolt')->trans("general.phrase.cancel")), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.action.delete", $this->env->getExtension('Bolt')->trans("contenttypes.generic.delete", array("%contenttype%" => "%CTNAME%"))), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.action.publish", $this->env->getExtension('Bolt')->trans("contenttypes.generic.publish", array("%contenttype%" => "%CTNAME%"))), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.action.depublish", $this->env->getExtension('Bolt')->trans("general.phrase.status-change-held")), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->addData("recordlisting.action.draft", $this->env->getExtension('Bolt')->trans("general.phrase.status-change-draft")), "html", null, true);
        echo "
";
        
        $__internal_e437fd0ab4d01308a36a8385e1a384210db6641c4b06b191de3dba4ffcf970ab->leave($__internal_e437fd0ab4d01308a36a8385e1a384210db6641c4b06b191de3dba4ffcf970ab_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_record_list_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ data('recordlisting.confirm.one',      __('Are you sure you want to do this for 1 record?')) }}*/
/* {{ data('recordlisting.confirm.multi',    __('Are you sure you want to do this for %NUMBER% records?')) }}*/
/* {{ data('recordlisting.confirm.no-undo',  __('general.phrase.no-undo')) }}*/
/* {{ data('recordlisting.action.cancel',    __('general.phrase.cancel')) }}*/
/* {{ data('recordlisting.action.delete',    __('contenttypes.generic.delete', {'%contenttype%': '%CTNAME%'})) }}*/
/* {{ data('recordlisting.action.publish',   __('contenttypes.generic.publish', {'%contenttype%': '%CTNAME%'})) }}*/
/* {{ data('recordlisting.action.depublish', __('general.phrase.status-change-held')) }}*/
/* {{ data('recordlisting.action.draft',     __('general.phrase.status-change-draft')) }}*/
/* */
