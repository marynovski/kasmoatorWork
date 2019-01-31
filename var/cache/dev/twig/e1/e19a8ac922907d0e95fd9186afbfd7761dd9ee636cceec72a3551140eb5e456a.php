<?php

/* projekty/index.html.twig */
class __TwigTemplate_82301103100b3cedf3f5ca8865bca2c4b1b34a54ac7b4e0f9d8ffb5fcc83bffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projekty/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13b5797eaffeb505348b7216d71b44dcf747ac2410a1ca1e8ed716e42fd196ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b5797eaffeb505348b7216d71b44dcf747ac2410a1ca1e8ed716e42fd196ff->enter($__internal_13b5797eaffeb505348b7216d71b44dcf747ac2410a1ca1e8ed716e42fd196ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projekty/index.html.twig"));

        $__internal_77c3cf4c6794252bef8ca52ba129fb9eabed9b8c90f112e33e9e8aa7b2dcf015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c3cf4c6794252bef8ca52ba129fb9eabed9b8c90f112e33e9e8aa7b2dcf015->enter($__internal_77c3cf4c6794252bef8ca52ba129fb9eabed9b8c90f112e33e9e8aa7b2dcf015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projekty/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b5797eaffeb505348b7216d71b44dcf747ac2410a1ca1e8ed716e42fd196ff->leave($__internal_13b5797eaffeb505348b7216d71b44dcf747ac2410a1ca1e8ed716e42fd196ff_prof);

        
        $__internal_77c3cf4c6794252bef8ca52ba129fb9eabed9b8c90f112e33e9e8aa7b2dcf015->leave($__internal_77c3cf4c6794252bef8ca52ba129fb9eabed9b8c90f112e33e9e8aa7b2dcf015_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dfdb7b937eabf3dd84edfe6281b33b5526ddd252fd27a1310088db6f8009051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfdb7b937eabf3dd84edfe6281b33b5526ddd252fd27a1310088db6f8009051->enter($__internal_6dfdb7b937eabf3dd84edfe6281b33b5526ddd252fd27a1310088db6f8009051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d960ae806f181b9ef02525b7999806b3a78897b8d0d4ec90017c47af7a4e9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d960ae806f181b9ef02525b7999806b3a78897b8d0d4ec90017c47af7a4e9ba->enter($__internal_0d960ae806f181b9ef02525b7999806b3a78897b8d0d4ec90017c47af7a4e9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projekty</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projekties"] ?? $this->getContext($context, "projekties")));
        foreach ($context['_seq'] as $context["_key"] => $context["projekty"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projekty_show", array("id" => $this->getAttribute($context["projekty"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projekty"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["projekty"], "nazwa", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projekty_show", array("id" => $this->getAttribute($context["projekty"], "id", array()))), "html", null, true);
            echo "\">Pokaż</a>
                        </li>
                        ";
            // line 25
            echo "                            ";
            // line 26
            echo "                        ";
            // line 27
            echo "                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projekty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projekty_new");
        echo "\">Dodaj projekt</a>
        </li>
    </ul>
";
        
        $__internal_0d960ae806f181b9ef02525b7999806b3a78897b8d0d4ec90017c47af7a4e9ba->leave($__internal_0d960ae806f181b9ef02525b7999806b3a78897b8d0d4ec90017c47af7a4e9ba_prof);

        
        $__internal_6dfdb7b937eabf3dd84edfe6281b33b5526ddd252fd27a1310088db6f8009051->leave($__internal_6dfdb7b937eabf3dd84edfe6281b33b5526ddd252fd27a1310088db6f8009051_prof);

    }

    public function getTemplateName()
    {
        return "projekty/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  91 => 27,  89 => 26,  87 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Projekty</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projekty in projekties %}
            <tr>
                <td><a href=\"{{ path('projekty_show', { 'id': projekty.id }) }}\">{{ projekty.id }}</a></td>
                <td>{{ projekty.nazwa }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projekty_show', { 'id': projekty.id }) }}\">Pokaż</a>
                        </li>
                        {#<li>#}
                            {#<a href=\"{{ path('projekty_edit', { 'id': projekty.id }) }}\">edit</a>#}
                        {#</li>#}
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projekty_new') }}\">Dodaj projekt</a>
        </li>
    </ul>
{% endblock %}
", "projekty/index.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\projekty\\index.html.twig");
    }
}
