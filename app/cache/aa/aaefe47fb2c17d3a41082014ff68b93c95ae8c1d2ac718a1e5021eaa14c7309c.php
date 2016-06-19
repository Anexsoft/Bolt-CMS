<?php

/* @bolt/email/firstuser.twig */
class __TwigTemplate_21af0d96eb5439adccab2f470431bb0f1e10ebe339ecb85f992823fd7371b7b6 extends Twig_Template
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
        $__internal_a93755b79b13a6c5b67582cdcf95027e79ec8c4e5acf6f45f04722e41cee19a3 = $this->env->getExtension("native_profiler");
        $__internal_a93755b79b13a6c5b67582cdcf95027e79ec8c4e5acf6f45f04722e41cee19a3->enter($__internal_a93755b79b13a6c5b67582cdcf95027e79ec8c4e5acf6f45f04722e41cee19a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/email/firstuser.twig"));

        // line 1
        echo "<p style=\"color: #204460;\"><strong>Congratulations! Bolt Set-up Complete</strong></p>
<p></p>
<p>
    If you have received this e-mail, your new Bolt site '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "sitename", array()), "html", null, true);
        echo "' is up
    and running and your outbound e-mail settings are correct.
</p>
<p></p>
<p>
    Thank you from all of the people that contribute to creating Bolt, we
    welcome your new site and hope that you enjoy using it as much as we enjoy
    creating it!
</p>
";
        
        $__internal_a93755b79b13a6c5b67582cdcf95027e79ec8c4e5acf6f45f04722e41cee19a3->leave($__internal_a93755b79b13a6c5b67582cdcf95027e79ec8c4e5acf6f45f04722e41cee19a3_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/email/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <p style="color: #204460;"><strong>Congratulations! Bolt Set-up Complete</strong></p>*/
/* <p></p>*/
/* <p>*/
/*     If you have received this e-mail, your new Bolt site '{{ context.sitename }}' is up*/
/*     and running and your outbound e-mail settings are correct.*/
/* </p>*/
/* <p></p>*/
/* <p>*/
/*     Thank you from all of the people that contribute to creating Bolt, we*/
/*     welcome your new site and hope that you enjoy using it as much as we enjoy*/
/*     creating it!*/
/* </p>*/
/* */
