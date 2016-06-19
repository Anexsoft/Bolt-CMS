<?php

/* partials/_footer.twig */
class __TwigTemplate_ed394498a0c6949d8b30f9f3f59dd6a354fee80a933e305ee6584fdf08138534 extends Twig_Template
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
        $__internal_944cf497ec2270e6a4a43aedd605c1749025510a146d3e4d5c7351bfdd0814d2 = $this->env->getExtension("native_profiler");
        $__internal_944cf497ec2270e6a4a43aedd605c1749025510a146d3e4d5c7351bfdd0814d2->enter($__internal_944cf497ec2270e6a4a43aedd605c1749025510a146d3e4d5c7351bfdd0814d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_footer.twig"));

        // line 1
        echo "<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <ul class=\"list-inline text-center\">
                    <li>
                        <a href=\"#\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </div>
</footer>

<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "assets/js/clean-blog.min.js\"></script>";
        
        $__internal_944cf497ec2270e6a4a43aedd605c1749025510a146d3e4d5c7351bfdd0814d2->leave($__internal_944cf497ec2270e6a4a43aedd605c1749025510a146d3e4d5c7351bfdd0814d2_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 40,  65 => 39,  61 => 38,  22 => 1,);
    }
}
/* <!-- Footer -->*/
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                 <ul class="list-inline text-center">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <span class="fa-stack fa-lg">*/
/*                                 <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                 <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>*/
/*                             </span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <span class="fa-stack fa-lg">*/
/*                                 <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                 <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>*/
/*                             </span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <span class="fa-stack fa-lg">*/
/*                                 <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                 <i class="fa fa-github fa-stack-1x fa-inverse"></i>*/
/*                             </span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <script src="{{ paths.theme }}assets/js/jquery.min.js"></script>*/
/* <script src="{{ paths.theme }}assets/js/bootstrap.min.js"></script>*/
/* <script src="{{ paths.theme }}assets/js/clean-blog.min.js"></script>*/
