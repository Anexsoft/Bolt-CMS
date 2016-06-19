<?php

/* form_bolt_layout.twig */
class __TwigTemplate_676db9805a537a0c7282dc0615251effe753f549e1c8e2ef062b52b2e43a350f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d037c7a21a756482cdaa2076e4eab1f1615c321ee102902889acc46e9fb60933 = $this->env->getExtension("native_profiler");
        $__internal_d037c7a21a756482cdaa2076e4eab1f1615c321ee102902889acc46e9fb60933->enter($__internal_d037c7a21a756482cdaa2076e4eab1f1615c321ee102902889acc46e9fb60933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_bolt_layout.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_errors', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        
        $__internal_d037c7a21a756482cdaa2076e4eab1f1615c321ee102902889acc46e9fb60933->leave($__internal_d037c7a21a756482cdaa2076e4eab1f1615c321ee102902889acc46e9fb60933_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0214e4c2989bff6a402e49afd3d76934672010b08bac36bfb7f8ca40c16e6835 = $this->env->getExtension("native_profiler");
        $__internal_0214e4c2989bff6a402e49afd3d76934672010b08bac36bfb7f8ca40c16e6835->enter($__internal_0214e4c2989bff6a402e49afd3d76934672010b08bac36bfb7f8ca40c16e6835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"form-group ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10 col-md-6 col-lg-4\">
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "form-control large")));
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0214e4c2989bff6a402e49afd3d76934672010b08bac36bfb7f8ca40c16e6835->leave($__internal_0214e4c2989bff6a402e49afd3d76934672010b08bac36bfb7f8ca40c16e6835_prof);

    }

    // line 15
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0295fa4d7f1ec2891ab2951391efb18789be65193e4cb1e3664c598394cbe5ef = $this->env->getExtension("native_profiler");
        $__internal_0295fa4d7f1ec2891ab2951391efb18789be65193e4cb1e3664c598394cbe5ef->enter($__internal_0295fa4d7f1ec2891ab2951391efb18789be65193e4cb1e3664c598394cbe5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, (((null === $this->getAttribute(            // line 19
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(            // line 20
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(            // line 21
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
            // line 22
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0295fa4d7f1ec2891ab2951391efb18789be65193e4cb1e3664c598394cbe5ef->leave($__internal_0295fa4d7f1ec2891ab2951391efb18789be65193e4cb1e3664c598394cbe5ef_prof);

    }

    // line 27
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_38cd4f562c6b6fe0a6309d8b04d3d711e6a9c7ee12e03e6134914e3e387cb65e = $this->env->getExtension("native_profiler");
        $__internal_38cd4f562c6b6fe0a6309d8b04d3d711e6a9c7ee12e03e6134914e3e387cb65e->enter($__internal_38cd4f562c6b6fe0a6309d8b04d3d711e6a9c7ee12e03e6134914e3e387cb65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        <div>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "                <div class=\"checkbox\">
                    <label>
                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            // line 34
            echo "</label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_38cd4f562c6b6fe0a6309d8b04d3d711e6a9c7ee12e03e6134914e3e387cb65e->leave($__internal_38cd4f562c6b6fe0a6309d8b04d3d711e6a9c7ee12e03e6134914e3e387cb65e_prof);

    }

    public function getTemplateName()
    {
        return "form_bolt_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 37,  140 => 34,  137 => 33,  133 => 31,  129 => 30,  126 => 29,  123 => 28,  117 => 27,  109 => 24,  102 => 22,  100 => 21,  99 => 20,  98 => 19,  96 => 18,  91 => 17,  88 => 16,  82 => 15,  70 => 9,  66 => 8,  61 => 6,  54 => 5,  51 => 4,  45 => 3,  38 => 27,  35 => 26,  33 => 15,  30 => 14,  28 => 3,  25 => 2,);
    }
}
/* {# overrides for the defaults in vendor/symfony/twig-bridge/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig #}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group {% if errors|length > 0 %}has-error{% endif %}">*/
/*             {{ form_label(form, null, {'label_attr': {'class':'col-sm-2 control-label' } }) }}*/
/*             <div class="col-sm-10 col-md-6 col-lg-4">*/
/*                 {{ form_widget(form, {'attr' : { 'class' : 'form-control large' } }) }}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_errors %}*/
/*     {% spaceless %}*/
/*         {% for error in errors %}*/
/*             <span class="help-block">{{*/
/*             error.messagePluralization is null*/
/*             ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*             : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')*/
/*             }}</span>*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         <div>*/
/*             {% for child in form %}*/
/*                 <div class="checkbox">*/
/*                     <label>*/
/*                     {{ form_widget(child) }}{{ child.vars.label -}}*/
/*                     </label>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
