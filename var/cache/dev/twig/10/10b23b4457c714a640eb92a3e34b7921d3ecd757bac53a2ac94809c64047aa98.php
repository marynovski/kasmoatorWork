<?php

/* base.html.twig */
class __TwigTemplate_820014a7d11e5630f7b8f96636ab25f9df9e043eb564847d32007105b80be4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a10c8614a8466b28b6eeb4b0b91f3ef88b79186dbaf1c50a27f83ae580af5115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10c8614a8466b28b6eeb4b0b91f3ef88b79186dbaf1c50a27f83ae580af5115->enter($__internal_a10c8614a8466b28b6eeb4b0b91f3ef88b79186dbaf1c50a27f83ae580af5115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2211cc9e18bfba653b276784e1d4f65835f1b2c787f9d128c43fb26b3b106c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2211cc9e18bfba653b276784e1d4f65835f1b2c787f9d128c43fb26b3b106c1e->enter($__internal_2211cc9e18bfba653b276784e1d4f65835f1b2c787f9d128c43fb26b3b106c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tetranzselect2entity/js/select2entity.js"), "html", null, true);
        echo "\"></script>
        <style>
            .po_terminie{
                background: #f05d52;
            }
        </style>

    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        <script type=\"text/javascript\">
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "        </script>
    </body>
</html>
";
        
        $__internal_a10c8614a8466b28b6eeb4b0b91f3ef88b79186dbaf1c50a27f83ae580af5115->leave($__internal_a10c8614a8466b28b6eeb4b0b91f3ef88b79186dbaf1c50a27f83ae580af5115_prof);

        
        $__internal_2211cc9e18bfba653b276784e1d4f65835f1b2c787f9d128c43fb26b3b106c1e->leave($__internal_2211cc9e18bfba653b276784e1d4f65835f1b2c787f9d128c43fb26b3b106c1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_33b56b4043fd70654ac7989ac9624c0d63e985cc9a8ab0b19ac426319a92802f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b56b4043fd70654ac7989ac9624c0d63e985cc9a8ab0b19ac426319a92802f->enter($__internal_33b56b4043fd70654ac7989ac9624c0d63e985cc9a8ab0b19ac426319a92802f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7c211e07a2b524157b93331a34d691acdfdfe6f2f6ed812241312b341ac2ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c211e07a2b524157b93331a34d691acdfdfe6f2f6ed812241312b341ac2ea4->enter($__internal_a7c211e07a2b524157b93331a34d691acdfdfe6f2f6ed812241312b341ac2ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7c211e07a2b524157b93331a34d691acdfdfe6f2f6ed812241312b341ac2ea4->leave($__internal_a7c211e07a2b524157b93331a34d691acdfdfe6f2f6ed812241312b341ac2ea4_prof);

        
        $__internal_33b56b4043fd70654ac7989ac9624c0d63e985cc9a8ab0b19ac426319a92802f->leave($__internal_33b56b4043fd70654ac7989ac9624c0d63e985cc9a8ab0b19ac426319a92802f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3581bc950ab001111e53cdf48182e4cc975af92d9e9ba0357abebbc9d1d76674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3581bc950ab001111e53cdf48182e4cc975af92d9e9ba0357abebbc9d1d76674->enter($__internal_3581bc950ab001111e53cdf48182e4cc975af92d9e9ba0357abebbc9d1d76674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e7589f9d0f70e1cd9611fd5b3ac028b9d0c52b5cdcc623ff9719a89d66755e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7589f9d0f70e1cd9611fd5b3ac028b9d0c52b5cdcc623ff9719a89d66755e55->enter($__internal_e7589f9d0f70e1cd9611fd5b3ac028b9d0c52b5cdcc623ff9719a89d66755e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e7589f9d0f70e1cd9611fd5b3ac028b9d0c52b5cdcc623ff9719a89d66755e55->leave($__internal_e7589f9d0f70e1cd9611fd5b3ac028b9d0c52b5cdcc623ff9719a89d66755e55_prof);

        
        $__internal_3581bc950ab001111e53cdf48182e4cc975af92d9e9ba0357abebbc9d1d76674->leave($__internal_3581bc950ab001111e53cdf48182e4cc975af92d9e9ba0357abebbc9d1d76674_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_25550530d0b40a3184c371da758587e1f72b14ddbe52dd9d621186e78d419cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25550530d0b40a3184c371da758587e1f72b14ddbe52dd9d621186e78d419cf9->enter($__internal_25550530d0b40a3184c371da758587e1f72b14ddbe52dd9d621186e78d419cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e2f731023e8bd15912705e7f485551f6c9b35d5fbdf0b42111a07cc04167ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2f731023e8bd15912705e7f485551f6c9b35d5fbdf0b42111a07cc04167ffa->enter($__internal_6e2f731023e8bd15912705e7f485551f6c9b35d5fbdf0b42111a07cc04167ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e2f731023e8bd15912705e7f485551f6c9b35d5fbdf0b42111a07cc04167ffa->leave($__internal_6e2f731023e8bd15912705e7f485551f6c9b35d5fbdf0b42111a07cc04167ffa_prof);

        
        $__internal_25550530d0b40a3184c371da758587e1f72b14ddbe52dd9d621186e78d419cf9->leave($__internal_25550530d0b40a3184c371da758587e1f72b14ddbe52dd9d621186e78d419cf9_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2c6a7df828b3106ed0674d4f8ca2253ef073c7f2d2b9f65ecfde7854ccd77c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c6a7df828b3106ed0674d4f8ca2253ef073c7f2d2b9f65ecfde7854ccd77c6->enter($__internal_e2c6a7df828b3106ed0674d4f8ca2253ef073c7f2d2b9f65ecfde7854ccd77c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ca829b46e80f7c578c9d7057d3f19ceba0d63a1530f81c7c801a0fa7ba7f8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca829b46e80f7c578c9d7057d3f19ceba0d63a1530f81c7c801a0fa7ba7f8b3->enter($__internal_7ca829b46e80f7c578c9d7057d3f19ceba0d63a1530f81c7c801a0fa7ba7f8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ca829b46e80f7c578c9d7057d3f19ceba0d63a1530f81c7c801a0fa7ba7f8b3->leave($__internal_7ca829b46e80f7c578c9d7057d3f19ceba0d63a1530f81c7c801a0fa7ba7f8b3_prof);

        
        $__internal_e2c6a7df828b3106ed0674d4f8ca2253ef073c7f2d2b9f65ecfde7854ccd77c6->leave($__internal_e2c6a7df828b3106ed0674d4f8ca2253ef073c7f2d2b9f65ecfde7854ccd77c6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 20,  114 => 18,  97 => 6,  79 => 5,  66 => 21,  64 => 20,  61 => 19,  59 => 18,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"{{ asset('bundles/tetranzselect2entity/js/select2entity.js') }}\"></script>
        <style>
            .po_terminie{
                background: #f05d52;
            }
        </style>

    </head>
    <body>
        {% block body %}{% endblock %}
        <script type=\"text/javascript\">
        {% block javascripts %}{% endblock %}
        </script>
    </body>
</html>
", "base.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\base.html.twig");
    }
}
