import { Brain, Heart, RefreshCw, GraduationCap } from 'lucide-react';

const Features = () => {
  const features = [
    {
      icon: Brain,
      title: 'Neuropsicoterapeuta',
      description: 'Especialização em neurociência aplicada',
    },
    {
      icon: Heart,
      title: 'Abordagem Humanizada',
      description: 'Escuta acolhedora e ética',
    },
    {
      icon: RefreshCw,
      title: 'Atualização Constante',
      description: 'Técnicas terapêuticas modernas',
    },
    {
      icon: GraduationCap,
      title: 'Experiência',
      description: 'Anos de dedicação à saúde mental',
    },
  ];

  return (
    <section className="py-16 bg-muted/50">
      <div className="container mx-auto px-4">
        <div className="grid grid-cols-2 lg:grid-cols-4 gap-6">
          {features.map((feature, index) => (
            <div
              key={index}
              className="bg-card p-6 rounded-xl shadow-sm border border-border text-center hover:shadow-md transition-shadow"
            >
              <div className="w-12 h-12 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                <feature.icon size={24} className="text-primary" />
              </div>
              <h3 className="font-serif font-semibold text-foreground mb-2">{feature.title}</h3>
              <p className="text-sm text-muted-foreground">{feature.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Features;
