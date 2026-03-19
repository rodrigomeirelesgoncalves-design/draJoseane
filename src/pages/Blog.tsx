import { useEffect, useState } from 'react';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import LocationTags from '@/components/LocationTags';
import WhatsAppButton from '@/components/WhatsAppButton';
import { ExternalLink, Calendar, User, ArrowLeft } from 'lucide-react';
import { Button } from '@/components/ui/button';

interface GitHubFile {
  name: string;
  path: string;
  download_url: string;
  type: string;
}

interface BlogPost {
  title: string;
  slug: string;
  date: string;
  excerpt: string;
  content: string;
  image?: string;
}

const REPO_URL = 'https://github.com/rodrigomeirelesgoncalves-design/blog-joseanesouza';
const API_URL = 'https://api.github.com/repos/rodrigomeirelesgoncalves-design/blog-joseanesouza/contents';

const Blog = () => {
  const [posts, setPosts] = useState<BlogPost[]>([]);
  const [loading, setLoading] = useState(true);
  const [selectedPost, setSelectedPost] = useState<BlogPost | null>(null);

  useEffect(() => {
    const fetchPosts = async () => {
      try {
        const res = await fetch(API_URL);
        if (!res.ok) throw new Error('Failed to fetch');
        const files: GitHubFile[] = await res.json();

        const mdFiles = files.filter(f => f.name.endsWith('.md') && f.name !== 'README.md');

        const postPromises = mdFiles.map(async (file) => {
          const contentRes = await fetch(file.download_url);
          const text = await contentRes.text();

          const titleMatch = text.match(/^#\s+(.+)/m);
          const title = titleMatch ? titleMatch[1] : file.name.replace('.md', '').replace(/-/g, ' ');

          const lines = text.split('\n').filter(l => l.trim() && !l.startsWith('#'));
          const excerpt = lines.slice(0, 2).join(' ').substring(0, 200) + '...';

          const imgMatch = text.match(/!\[.*?\]\((.*?)\)/);

          return {
            title,
            slug: file.name.replace('.md', ''),
            date: new Date().toLocaleDateString('pt-BR'),
            excerpt,
            content: text,
            image: imgMatch ? imgMatch[1] : undefined,
          };
        });

        const allPosts = await Promise.all(postPromises);
        setPosts(allPosts);
      } catch (err) {
        console.error('Erro ao carregar posts:', err);
        setPosts([
          {
            title: 'Como lidar com a ansiedade no dia a dia',
            slug: 'ansiedade-dia-a-dia',
            date: new Date().toLocaleDateString('pt-BR'),
            excerpt: 'A ansiedade é uma resposta natural do corpo, mas quando ela se torna constante pode afetar significativamente sua qualidade de vida...',
            content: '',
          },
          {
            title: 'A importância da terapia online',
            slug: 'terapia-online',
            date: new Date().toLocaleDateString('pt-BR'),
            excerpt: 'O atendimento online revolucionou o acesso à saúde mental, permitindo que pessoas de todo o Brasil tenham acesso a tratamento de qualidade...',
            content: '',
          },
          {
            title: 'Entendendo os traumas emocionais',
            slug: 'traumas-emocionais',
            date: new Date().toLocaleDateString('pt-BR'),
            excerpt: 'Traumas emocionais podem se manifestar de diversas formas e impactar profundamente nossa vida cotidiana. Entender seus mecanismos é o primeiro passo...',
            content: '',
          },
          {
            title: 'Neurociência e psicoterapia: uma aliança poderosa',
            slug: 'neurociencia-psicoterapia',
            date: new Date().toLocaleDateString('pt-BR'),
            excerpt: 'A neuropsicoterapia combina os avanços da neurociência com técnicas terapêuticas comprovadas para oferecer tratamentos mais eficazes...',
            content: '',
          },
          {
            title: 'Sinais de que você precisa de ajuda profissional',
            slug: 'sinais-ajuda',
            date: new Date().toLocaleDateString('pt-BR'),
            excerpt: 'Muitas vezes ignoramos sinais importantes que nosso corpo e mente nos enviam. Reconhecer esses sinais é fundamental para buscar ajuda...',
            content: '',
          },
          {
            title: 'Autocuidado e saúde mental',
            slug: 'autocuidado',
            date: new Date().toLocaleDateString('pt-BR'),
            excerpt: 'Práticas de autocuidado são essenciais para manter o equilíbrio emocional. Descubra estratégias simples que podem fazer grande diferença...',
            content: '',
          },
        ]);
      } finally {
        setLoading(false);
      }
    };

    fetchPosts();
  }, []);

  const renderMarkdown = (text: string) => {
    return text
      .replace(/^### (.+)/gm, '<h3 class="font-serif text-xl font-bold text-foreground mt-6 mb-3">$1</h3>')
      .replace(/^## (.+)/gm, '<h2 class="font-serif text-2xl font-bold text-foreground mt-8 mb-4">$1</h2>')
      .replace(/^# (.+)/gm, '<h1 class="font-serif text-3xl font-bold text-foreground mb-6">$1</h1>')
      .replace(/\*\*(.+?)\*\*/g, '<strong class="text-foreground">$1</strong>')
      .replace(/\*(.+?)\*/g, '<em>$1</em>')
      .replace(/!\[(.+?)\]\((.+?)\)/g, '<img src="$2" alt="$1" class="rounded-xl my-6 w-full" />')
      .replace(/\[(.+?)\]\((.+?)\)/g, '<a href="$2" class="text-primary hover:underline" target="_blank">$1</a>')
      .replace(/^- (.+)/gm, '<li class="ml-4 text-muted-foreground">• $1</li>')
      .replace(/\n\n/g, '</p><p class="text-muted-foreground mb-4">')
      .replace(/^(.+)$/gm, (match) => {
        if (match.startsWith('<')) return match;
        return `<p class="text-muted-foreground mb-4">${match}</p>`;
      });
  };

  if (selectedPost && selectedPost.content) {
    return (
      <div className="min-h-screen">
        <Header />
        <section className="pt-28 pb-16 px-4">
          <div className="container mx-auto max-w-3xl">
            <Button
              variant="ghost"
              className="mb-6 text-primary hover:text-primary/80"
              onClick={() => setSelectedPost(null)}
            >
              <ArrowLeft size={18} className="mr-2" />
              Voltar ao Blog
            </Button>
            <article>
              {selectedPost.image && (
                <img
                  src={selectedPost.image}
                  alt={selectedPost.title}
                  className="w-full rounded-2xl mb-8 max-h-96 object-cover"
                />
              )}
              <div
                className="prose prose-lg max-w-none"
                dangerouslySetInnerHTML={{ __html: renderMarkdown(selectedPost.content) }}
              />
            </article>
          </div>
        </section>
        <Footer />
        <LocationTags />
        <WhatsAppButton />
      </div>
    );
  }

  return (
    <div className="min-h-screen">
      <Header />
      <section className="pt-28 pb-16 px-4">
        <div className="container mx-auto">
          <div className="text-center mb-12">
            <span className="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
              Blog
            </span>
            <h1 className="font-serif text-3xl md:text-4xl font-bold text-foreground mb-4">
              Conteúdos sobre <span className="text-primary">saúde mental</span>
            </h1>
            <p className="text-muted-foreground max-w-2xl mx-auto">
              Artigos, dicas e reflexões para ajudar você no caminho do equilíbrio emocional.
            </p>
          </div>

          {loading ? (
            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
              {[1, 2, 3].map(i => (
                <div key={i} className="bg-card rounded-2xl border border-border p-6 animate-pulse">
                  <div className="h-40 bg-muted rounded-xl mb-4" />
                  <div className="h-4 bg-muted rounded w-3/4 mb-2" />
                  <div className="h-3 bg-muted rounded w-full mb-1" />
                  <div className="h-3 bg-muted rounded w-2/3" />
                </div>
              ))}
            </div>
          ) : (
            <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
              {posts.map((post) => (
                <article
                  key={post.slug}
                  className="bg-card rounded-2xl border border-border overflow-hidden hover:shadow-lg transition-all group cursor-pointer"
                  onClick={() => post.content ? setSelectedPost(post) : undefined}
                >
                  {post.image ? (
                    <img
                      src={post.image}
                      alt={post.title}
                      className="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                    />
                  ) : (
                    <div className="w-full h-48 bg-gradient-to-br from-primary/10 to-teal-light flex items-center justify-center">
                      <span className="font-serif text-5xl text-primary/30">{post.title.charAt(0)}</span>
                    </div>
                  )}
                  <div className="p-6">
                    <div className="flex items-center gap-4 text-xs text-muted-foreground mb-3">
                      <span className="flex items-center gap-1">
                        <Calendar size={12} />
                        {post.date}
                      </span>
                      <span className="flex items-center gap-1">
                        <User size={12} />
                        Joseane Souza
                      </span>
                    </div>
                    <h2 className="font-serif text-lg font-bold text-foreground mb-2 group-hover:text-primary transition-colors">
                      {post.title}
                    </h2>
                    <p className="text-sm text-muted-foreground line-clamp-3">
                      {post.excerpt}
                    </p>
                  </div>
                </article>
              ))}
            </div>
          )}

          <div className="text-center mt-12">
            <Button asChild variant="outline" className="gap-2">
              <a href={REPO_URL} target="_blank" rel="noopener noreferrer">
                <ExternalLink size={16} />
                Ver repositório completo
              </a>
            </Button>
          </div>
        </div>
      </section>
      <Footer />
      <LocationTags />
      <WhatsAppButton />
    </div>
  );
};

export default Blog;
