<?php

/* @bolt/overview/overview.twig */
class __TwigTemplate_6d18c15ac973bff0be371eeb2928b8993cac3288caa327fd070e9a9088cb404b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/overview/overview.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32090ce77067796311e4bfbf3d6420388c516dbe4897800ebc73b5bef7720ce9 = $this->env->getExtension("native_profiler");
        $__internal_32090ce77067796311e4bfbf3d6420388c516dbe4897800ebc73b5bef7720ce9->enter($__internal_32090ce77067796311e4bfbf3d6420388c516dbe4897800ebc73b5bef7720ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/overview/overview.twig"));

        // line 3
        $context["__internal_5593fe90f962d86280371d6b2bea14140cab71a0048688da4ee3bfb63306444d"] = $this->loadTemplate("@bolt/_sub/_record_list.twig", "@bolt/overview/overview.twig", 3);
        // line 4
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/overview/overview.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32090ce77067796311e4bfbf3d6420388c516dbe4897800ebc73b5bef7720ce9->leave($__internal_32090ce77067796311e4bfbf3d6420388c516dbe4897800ebc73b5bef7720ce9_prof);

    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_decb92146ed3f00c908e17988142ca7ba2fcb039bc3ef601a2eae609935f3597 = $this->env->getExtension("native_profiler");
        $__internal_decb92146ed3f00c908e17988142ca7ba2fcb039bc3ef601a2eae609935f3597->enter($__internal_decb92146ed3f00c908e17988142ca7ba2fcb039bc3ef601a2eae609935f3597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Content/*";
        
        $__internal_decb92146ed3f00c908e17988142ca7ba2fcb039bc3ef601a2eae609935f3597->leave($__internal_decb92146ed3f00c908e17988142ca7ba2fcb039bc3ef601a2eae609935f3597_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_59324e98326273e5d26d196ef0f9058ac5c9a692944990c9b9968da3a03b7d98 = $this->env->getExtension("native_profiler");
        $__internal_59324e98326273e5d26d196ef0f9058ac5c9a692944990c9b9968da3a03b7d98->enter($__internal_59324e98326273e5d26d196ef0f9058ac5c9a692944990c9b9968da3a03b7d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt')->trans("general.phrase.overview");
        
        $__internal_59324e98326273e5d26d196ef0f9058ac5c9a692944990c9b9968da3a03b7d98->leave($__internal_59324e98326273e5d26d196ef0f9058ac5c9a692944990c9b9968da3a03b7d98_prof);

    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_87681ec8e044a113fc06779c839044c97d78f47cb005b6197447f50f91057c87 = $this->env->getExtension("native_profiler");
        $__internal_87681ec8e044a113fc06779c839044c97d78f47cb005b6197447f50f91057c87->enter($__internal_87681ec8e044a113fc06779c839044c97d78f47cb005b6197447f50f91057c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "name", array())));
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array())) {
            // line 15
            echo "        <small>(";
            echo $this->env->getExtension('Bolt')->trans("filtered by <em>'%filter%'</em>", array("%filter%" => twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array()), ", ")));
            echo ")</small>
    ";
        }
        
        $__internal_87681ec8e044a113fc06779c839044c97d78f47cb005b6197447f50f91057c87->leave($__internal_87681ec8e044a113fc06779c839044c97d78f47cb005b6197447f50f91057c87_prof);

    }

    // line 20
    public function block_messages($context, array $blocks = array())
    {
        $__internal_7553c4b295dc1af3bb55750d48bcc6fe4f504f1c70c4e02dda7031a98910d077 = $this->env->getExtension("native_profiler");
        $__internal_7553c4b295dc1af3bb55750d48bcc6fe4f504f1c70c4e02dda7031a98910d077->enter($__internal_7553c4b295dc1af3bb55750d48bcc6fe4f504f1c70c4e02dda7031a98910d077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo "";
        
        $__internal_7553c4b295dc1af3bb55750d48bcc6fe4f504f1c70c4e02dda7031a98910d077->leave($__internal_7553c4b295dc1af3bb55750d48bcc6fe4f504f1c70c4e02dda7031a98910d077_prof);

    }

    // line 22
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_349fdebd2f03dbbd64cdc9e56faeebe420aa8a35770e340971fc63c435119f89 = $this->env->getExtension("native_profiler");
        $__internal_349fdebd2f03dbbd64cdc9e56faeebe420aa8a35770e340971fc63c435119f89->enter($__internal_349fdebd2f03dbbd64cdc9e56faeebe420aa8a35770e340971fc63c435119f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 27
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 29
        echo $this->env->getExtension('Bolt')->widgets("overview_below_header", "backend");
        echo "

            ";
        // line 31
        echo $context["__internal_5593fe90f962d86280371d6b2bea14140cab71a0048688da4ee3bfb63306444d"]->getrecord_list($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "multiplecontent", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "permissions", array()), "", "", twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array()), " "));
        echo "

            ";
        // line 33
        echo $this->env->getExtension('Bolt')->widgets("overview_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4\">

            ";
        // line 39
        echo $this->env->getExtension('Bolt')->widgets("overview_aside_top", "backend");
        echo "

            ";
        // line 41
        echo twig_include($this->env, $context, "@bolt/overview/_panel-actions_overview.twig");
        echo "

            ";
        // line 43
        echo $this->env->getExtension('Bolt')->widgets("overview_aside_middle", "backend");
        echo "

            ";
        // line 45
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        echo "

            ";
        // line 47
        echo $this->env->getExtension('Bolt')->widgets("overview_aside_bottom", "backend");
        echo "

        </aside>
    </div>

";
        
        $__internal_349fdebd2f03dbbd64cdc9e56faeebe420aa8a35770e340971fc63c435119f89->leave($__internal_349fdebd2f03dbbd64cdc9e56faeebe420aa8a35770e340971fc63c435119f89_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/overview/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  154 => 45,  149 => 43,  144 => 41,  139 => 39,  130 => 33,  125 => 31,  120 => 29,  115 => 27,  109 => 23,  103 => 22,  91 => 20,  80 => 15,  78 => 14,  73 => 13,  67 => 12,  55 => 10,  43 => 8,  36 => 6,  34 => 4,  32 => 3,  11 => 6,);
    }
}
/* {# Page: NavSecondary > Content ... > #}*/
/* */
/* {% from '@bolt/_sub/_record_list.twig' import record_list as list %}*/
/* {% import '@bolt/_macro/_panels.twig' as panels %}*/
/* */
/* {% extends '@bolt/_base/_page-nav.twig' %}*/
/* */
/* {% block page_nav 'Content/*' %}*/
/* */
/* {% block page_title __('general.phrase.overview') %}*/
/* */
/* {% block page_subtitle %}*/
/*     {{ __(['contenttypes', context.contenttype.slug, 'name', 'plural'], {DEFAULT: context.contenttype.name}) }}*/
/*     {% if context.filter %}*/
/*         <small>({{ __("filtered by <em>'%filter%'</em>", {'%filter%': context.filter|join(', ') }) }})</small>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {# clear default messages, because we use them in a different spot, in this template #}*/
/* {% block messages "" %}*/
/* */
/* {% block page_main %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/* */
/*             {{ include('@bolt/_sub/_messages.twig') }}*/
/* */
/*             {{ widgets('overview_below_header', 'backend') }}*/
/* */
/*             {{ list(context.contenttype, context.multiplecontent, context.permissions, '', '', context.filter|join(' ')) }}*/
/* */
/*             {{ widgets('overview_bottom', 'backend') }}*/
/* */
/*         </div>*/
/* */
/*         <aside class="col-md-4">*/
/* */
/*             {{ widgets('overview_aside_top', 'backend') }}*/
/* */
/*             {{ include('@bolt/overview/_panel-actions_overview.twig') }}*/
/* */
/*             {{ widgets('overview_aside_middle', 'backend') }}*/
/* */
/*             {{ panels.lastmodified(context.contenttype.slug) }}*/
/* */
/*             {{ widgets('overview_aside_bottom', 'backend') }}*/
/* */
/*         </aside>*/
/*     </div>*/
/* */
/* {% endblock page_main %}*/
/* */
