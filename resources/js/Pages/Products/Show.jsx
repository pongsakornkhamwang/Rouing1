import { Link } from '@inertiajs/react';

export default function ProductShow({ product, bannerImage }) {
    const handleBuyNow = () => {
        alert('Product purchased successfully!');
    };

    return (
        <div style={{ fontFamily: 'Arial, sans-serif', padding: '20px' }}>
            <h1 style={{ textAlign: 'center', marginBottom: '20px' }}>{product.name}</h1>
            <img
                src={product.image}
                alt={product.name}
                style={{ display: 'block', margin: '0 auto', maxWidth: '300px', borderRadius: '10px' }}
            />
            <p style={{ textAlign: 'center', marginTop: '15px' }}>{product.description}</p>
            <p style={{ textAlign: 'center', fontSize: '20px', fontWeight: 'bold' }}>${product.price}</p>
            <div style={{ textAlign: 'center' }}>
                <Link href="/products">
                    <button style={{
                        backgroundColor: 'gray',
                        color: 'white',
                        padding: '10px 20px',
                        marginRight: '10px',
                        border: 'none',
                        borderRadius: '5px',
                    }}>
                        Back
                    </button>
                </Link>

            </div>
        </div>
    );
}
